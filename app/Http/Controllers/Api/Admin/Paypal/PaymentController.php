<?php

namespace App\Http\Controllers\Api\Admin\Paypal;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Family;
use Illuminate\Http\Request;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalHttp\HttpException;

class PaymentController extends Controller
{
    public function show($id,$amount){
        $user = Family::find($id);

        if (!$user) {
            abort(404);
        }

        return view('paypal', compact('user', 'amount'));
    }

    public function createOrder(Request $request)
    {
        $amount = $request->input('amount');
        $user_id = $request->input('user_id');

        $environment = new SandboxEnvironment(env('PAYPAL_CLIENT_ID'), env('PAYPAL_CLIENT_SECRET'));
        $client = new PayPalHttpClient($environment);

        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            'intent' => 'CAPTURE',
            'purchase_units' => [[
                'amount' => [
                    'value' => $amount,
                    'currency_code' => 'USD',
                ],
            ]],
        ];

        try {
            $response = $client->execute($request);
            $orderId = $response->result->id;
            session()->put('orderId', $orderId);

            return redirect()->route('capture-order');
        } catch (HttpException $ex) {
            return redirect()->route('checkout')->with('error', 'An error occurred while creating the order.');
        }
    }
    public function captureOrder(Request $request)
    {
        $orderId = session()->get('orderId');

        $environment = new SandboxEnvironment(env('PAYPAL_CLIENT_ID'), env('PAYPAL_CLIENT_SECRET'));
        $client = new PayPalHttpClient($environment);

        $request = new OrdersCaptureRequest($orderId);
        $request->prefer('return=representation');

        try {
            $response = $client->execute($request);
            $transactionId = $response->result->id;
            $amount = $response->result->purchase_units[0]->amount->value;
            $userId = $request->input('user_id');

            return redirect()->route('success', [
                'user_id' => $userId,
                'amount' => $amount,
                'transaction_id' => $transactionId,
            ]);
        } catch (HttpException $ex) {
            return redirect()->route('checkout')->with('error', 'An error occurred while capturing the order.');
        }
    }

    public function success(Request $request)
    {
        $userId = $request->input('user_id');
        Billing::where('family_id',$userId)->update(['is_paid'=>1]);
        return view('success');
    }
    public function cancel(){
        return view('cancel');
    }
}
