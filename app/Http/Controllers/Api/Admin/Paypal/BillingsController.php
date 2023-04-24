<?php

namespace App\Http\Controllers\Api\Admin\Paypal;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Family;
use Illuminate\Http\Request;

class BillingsController extends Controller
{
    public function usersBillings(Request $request){
        $request->validate([
            'month'=>'required'
        ]);
        $month = $request->month;
        $families = Family::all();
        $allPayments = [];
        $userObject = [];
        foreach ($families as $family) {
            $unpaidBillings = Billing::where('family_id',$family->id)->where('is_paid',0)->where('month',$request->month)->get();
            $totalAmount = $unpaidBillings->sum('amount');
            if ($totalAmount == 0){
                continue;
            }else{
                $userObject['user_id'] = $family->id;
                $userObject['mobile_number'] = $family->whatsapp_number;
                $userObject['family_name'] = $family->name;
                $userObject['currency_name'] = $family->currency->name;
                $userObject['currency_sumbol'] = $family->currency->symbol;
                $userObject['totalAmount'] = $totalAmount;
                $userObject['payment_link'] = asset(route('payment.show',['id'=>$family->id,'amount'=>$totalAmount,'month'=>$month]));
                array_push($allPayments,$userObject);
            }
        }
        return response()->json(['message'=>'تم استرجاع الفواتير بنجاح','data'=>$allPayments,'code'=>200]);
    }

    public function usersBillingsSearch(Request $request){
        $request->validate(['name'=>'required','month'=>'required']);
        $families = Family::where('name', 'like', '%' . $request->name . '%')->get();
        $month = $request->month;
        $allPayments = [];
        $userObject = [];

        foreach ($families as $family) {
            $unpaidBillings = Billing::where('family_id',$family->id)->where('is_paid',0)->where('month',$request->month)->get();
            $totalAmount = $unpaidBillings->sum('amount');
            if ($totalAmount == 0){
                continue;
            }else{
                $userObject['user_id'] = $family->id;
                $userObject['mobile_number'] = $family->whatsapp_number;
                $userObject['family_name'] = $family->name;
                $userObject['currency_name'] = $family->currency->name;
                $userObject['currency_sumbol'] = $family->currency->symbol;
                $userObject['totalAmount'] = $totalAmount;
                $userObject['payment_link'] = asset(route('payment.show',['id'=>$family->id,'amount'=>$totalAmount,'month'=>$month]));
                array_push($allPayments,$userObject);
            }
        }
        return response()->json(['message'=>'تم استرجاع الفواتير بنجاح','data'=>$allPayments,'code'=>200]);

    }

    public function usersBillingsPaid(Request $request){
        $request->validate([
            'month'=>'required'
        ]);
        $month = $request->month;
        $families = Family::all();
        $allPayments = [];
        $userObject = [];
        foreach ($families as $family) {
            $unpaidBillings = Billing::where('family_id',$family->id)->where('is_paid',1)->where('month',$request->month)->get();
            $totalAmount = $unpaidBillings->sum('amount');
            if ($totalAmount == 0){
                continue;
            }else{
                $userObject['user_id'] = $family->id;
                $userObject['mobile_number'] = $family->whatsapp_number;
                $userObject['family_name'] = $family->name;
                $userObject['currency_name'] = $family->currency->name;
                $userObject['currency_sumbol'] = $family->currency->symbol;
                $userObject['totalAmount'] = $totalAmount;
                array_push($allPayments,$userObject);
            }
        }
        return response()->json(['message'=>'تم استرجاع الفواتير بنجاح','data'=>$allPayments,'code'=>200]);
    }
}
