<?php

namespace App\Http\Controllers\Api\Admin\Paypal;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Tutor\Lectures\LectureResource;
use App\Models\Billing;
use App\Models\Currency;
use App\Models\Family;
use App\Traits\Helpers\ApiResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Twilio\Rest\Client;

class IndexController extends Controller
{
    use ApiResponseTrait;
    private $apiContext;

    public function __construct()
    {
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                "AWN9umVJZIzYQlo-lWS3ObnZOAKwaTYoz9gTXxSeHD61-BSMhjbBnQ2AlDqO6KPfrKEgzyJ1IxOa3CGZ",
                "EBkCiNDRr3igg0nQlElCKuBeyOFBkMehS-dAInvZWGoOO9R9Te97pbEbjC8pjHRxwGanzvJDk7qMkZx2"
            )
        );
    }
    public function sendPaymentLinks()
    {
        $families = Family::all();
        foreach ($families as $family) {

            $unpaidBillings = Billing::where('family_id',$family->id)->where('is_paid',0)->get();

            if (!$unpaidBillings->isEmpty()) {

                // Calculate the total amount of unpaid billings for this user
                $totalAmount = $unpaidBillings->sum('amount');

                // Create a new PayPal payer object
                $payer = new Payer();
                $payer->setPaymentMethod('paypal');

                // Create a new PayPal item list object
                $itemList = new ItemList();
                foreach ($unpaidBillings as $billing) {
                    $item = new Item();
                    $item->setName('Billing #' . $billing->id)
                        ->setCurrency('EUR')
                        ->setQuantity(1)
                        ->setPrice($billing->amount);
                    $itemList->addItem($item);
                }

                // Create a new PayPal details object
                $details = new Details();
                $details->setShipping(0)
                    ->setTax(0)
                    ->setSubtotal($totalAmount);

                // Create a new PayPal amount object
                $amount = new Amount();
                $amount->setCurrency('EUR')
                    ->setTotal($totalAmount)
                    ->setDetails($details);


                // Create a new PayPal transaction object
                $transaction = new Transaction();
                $transaction->setAmount($amount)
                    ->setItemList($itemList)
                    ->setDescription('Payment for unpaid billings');

                // Create a new PayPal redirect URLs object
                $redirectUrls = new RedirectUrls();
                $redirectUrls->setReturnUrl(route('payment.success',['family_id'=>$family->id]))
                    ->setCancelUrl(route('payment.cancel'));


                // Create a new PayPal payment object
                $payment = new Payment();
                $payment->setIntent('sale')
                    ->setPayer($payer)
                    ->setRedirectUrls($redirectUrls)
                    ->setTransactions([$transaction]);

                try {
                    // Create the PayPal payment object and get the approval URL
                    $payment->create($this->apiContext);
                    $approvalUrl = $payment->getApprovalLink();

                    return response()->json(['approval_link'=>$approvalUrl]);

//                    // Send the approval URL to the user via Twilio WhatsApp
//                    $twilioAccountSid = "AC593708d19684d43dd7f03d3654225621";
//                    $twilioAuthToken = "0b21dd2c0d1c162e3707d7d2381ce966";
//                    $twilioFromNumber = "+14155238886";
//                    $twilioToNumber = "201207220414";
//                    $twilioClient = new Client($twilioAccountSid, $twilioAuthToken);
//                    $family_name = Family::find($family->id)->name;
//                    $family_currency = Family::find($family->id)->currency->symbol;
//                    $currentMonth = Carbon::now()->format('F');
//                    $twilioClient->messages->create(
//                        "whatsapp:$twilioToNumber",
//                        [
//                            'from' => "whatsapp:$twilioFromNumber",
//                            'body' => " Elmajd Academy \nHello $family_name \nThis is $currentMonth Billing,\nTotal Amount = $totalAmount $family_currency \nFollow this link complete your payment : $approvalUrl \n Thanks",
//                       ]
//                    );

                    // Update the is_paid flag for all unpaid billings for this user
                    $unpaidBillings->update(['is_paid' => true]);
                } catch (\Exception $e) {
                    // Handle any PayPal or Twilio errors here
                }
            }else{
                continue;
            }
        }
    }
    public function success(Request $request,$family_id)
    {
        // Get the payment ID and payer ID from the request
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');

        // Retrieve the payment from PayPal
        $payment = Payment::get($paymentId, $this->apiContext);

        // Execute the payment
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);
        $execution->addTransaction($payment->getTransactions()[0]);
        $payment->execute($execution, $this->apiContext);

        // Update the user's billings to reflect the payment
        Billing::where('family_id',$family_id)->update(['is_paid'=>1]);
//        // Send the approval URL to the user via Twilio WhatsApp
//        $twilioAccountSid = "AC593708d19684d43dd7f03d3654225621";
//        $twilioAuthToken = "0b21dd2c0d1c162e3707d7d2381ce966";
//        $twilioFromNumber = "+14155238886";
//        $twilioToNumber = "201207220414";
//        $twilioClient = new Client($twilioAccountSid, $twilioAuthToken);
//        $twilioClient->messages->create(
//            "whatsapp:$twilioToNumber",
//            [
//                'from' => "whatsapp:$twilioFromNumber",
//                'body' => "Congratulations your payment done successfully",
//            ]
//        );
        // Redirect to a thank-you page
        dd('success');
    }

    /**
     * Handle canceled PayPal payment.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        // Redirect to a canceled page
        dd("error");
    }


    public function paid(){
        $count = Family::whereHas('billings', function($query) {
            $query->where('is_paid', 1);
        })->count();
        return $this->apiResponse('الاجمالي',['count'=>$count],true,Response::HTTP_OK);
    }
    public function unPaid(){
        $count = Family::whereHas('billings',function ($query){
            $query->where('is_paid','!=',1);
        })->count();
        return $this->apiResponse('الاجمالي',['count'=>$count],true,Response::HTTP_OK);
    }

}
