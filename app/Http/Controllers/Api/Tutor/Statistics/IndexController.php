<?php

namespace App\Http\Controllers\Api\Tutor\Statistics;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Course;
use App\Models\User;
use App\Traits\Helpers\ApiResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    use ApiResponseTrait;

    public function totalMonthHours(){
        $currentMonth = \Carbon\Carbon::now()->format('m');
        $total_hours = Billing::where('tutor_id',auth()->user()->id)->where('month',$currentMonth)->sum('lecture_duration');
        return $this->apiResponse('اجمالي ساعات الشهر للمعلم',['total_hours'=>$total_hours],true,Response::HTTP_OK);
    }

    public function totalCourses(){
        $total_courses = Course::where('tutor_id',auth()->user()->id)->count();
        return $this->apiResponse('اجمالي الكورسات',['total_courses'=>$total_courses],true,Response::HTTP_OK);
    }

    public function totalFamilies(){
        $total_families = User::find(auth()->user()->id)->families->count();
        return $this->apiResponse('اجمالي الأسر',['total_families'=>$total_families],true,Response::HTTP_OK);
    }
    public function totalLectures(){
        $currentMonth = \Carbon\Carbon::now()->month;
        $total_courses = Course::where('tutor_id',auth()->user()->id)->get();
        $lectures = 0;
        foreach ($total_courses as $total_course){
            $lectures += $total_course->lectures()->whereMonth('lecture_date',$currentMonth)->count();
        }
        return $this->apiResponse('اجمالي المحاضرات',['total_lectures'=>$lectures],true,Response::HTTP_OK);
    }
}
