<?php

namespace App\Http\Controllers\Api\Admin\Statistics;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Course;
use App\Models\Family;
use App\Models\User;
use App\Traits\Helpers\ApiResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    use ApiResponseTrait;
    public function totalMonthProfit(){
        $billings = Billing::all();
        $profits = 0;
        foreach ($billings as $billing){
            $total = $billing->hour_rate*$billing->lecture_duration;
            $profits +=$total;
        }
        return $this->apiResponse('اجمالي ساعات الشهر للمعلم',['profits'=>$profits],true,Response::HTTP_OK);

    }
    public function totalTutors(){
        $tutors = User::where('user_type_id',User::TUTOR)->count();
        return $this->apiResponse('اجمالي',['tutors'=>$tutors],true,Response::HTTP_OK);
    }
    public function totalFamilies(){
        $families = Family::count();
        return $this->apiResponse('اجمالي',['families'=>$families],true,Response::HTTP_OK);
    }

    public function totalDollars(){
        $currentMonth = Carbon::now()->month;
        $total = Billing::where('currency_id',1)->where('month',$currentMonth)->sum('amount');
        return $this->apiResponse('الاجمالي ',['total'=>$total],true,Response::HTTP_OK);
    }
    public function totalEuro(){
        $currentMonth = Carbon::now()->month;
        $total = Billing::where('currency_id',2)->where('month',$currentMonth)->sum('amount');
        return $this->apiResponse('الاجمالي ',['total'=>$total],true,Response::HTTP_OK);
    }
    public function totalCandainDollar(){
        $currentMonth = Carbon::now()->month;
        $total = Billing::where('currency_id',3)->where('month',$currentMonth)->sum('amount');
        return $this->apiResponse('الاجمالي ',['total'=>$total],true,Response::HTTP_OK);
    }
    public function totalPound(){
        $currentMonth = Carbon::now()->month;
        $total = Billing::where('currency_id',4)->where('month',$currentMonth)->sum('amount');
        return $this->apiResponse('الاجمالي ',['total'=>$total],true,Response::HTTP_OK);
    }
    public function totalHours(){
        $currentMonth = Carbon::now()->month;
        $total = Billing::where('month',$currentMonth)->sum('lecture_duration');
        return $this->apiResponse('الاجمالي ',['total'=>$total],true,Response::HTTP_OK);
    }
}
