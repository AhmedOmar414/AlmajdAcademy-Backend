<?php

namespace App\Http\Controllers\Api\Admin\Paypal;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Family;
use Illuminate\Http\Request;

class BillingsController extends Controller
{
    public function usersBillings(){
        $families = Family::all();
        $allPayments = [];
        $userObject = [];
        foreach ($families as $family) {

            $unpaidBillings = Billing::where('family_id',$family->id)->where('is_paid',0)->get();
            $totalAmount = $unpaidBillings->sum('amount');

            $userObject['user_id'] = $family->id;
            $userObject['mobile_number'] = $family->whatsapp_number;
            $userObject['currency_name'] = $family->currency->name;
            $userObject['currency_sumbol'] = $family->currency->symbol;
            $userObject['totalAmount'] = $totalAmount;
            $userObject['payment_link'] = asset(route('payment.show',['id'=>$family->id,'amount'=>$totalAmount]));
            array_push($allPayments,$userObject);

        }
        return response()->json($allPayments);
    }
}
