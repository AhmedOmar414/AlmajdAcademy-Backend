<?php

namespace App\Http\Controllers\Api\Admin\Statistics;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Course;
use App\Models\Family;
use App\Traits\Helpers\ApiResponseTrait;
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
    public function totalCourses(){
        $courses = Course::count();
        return $this->apiResponse('اجمالي ساعات الشهر للمعلم',['courses'=>$courses],true,Response::HTTP_OK);
    }
    public function totalFamilies(){
        $families = Family::count();
        return $this->apiResponse('اجمالي ساعات الشهر للمعلم',['families'=>$families],true,Response::HTTP_OK);
    }
}
