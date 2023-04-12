<?php

namespace App\Http\Controllers\Api\Admin\Salaries;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Admin\Tutors\TutorResource;
use App\Http\Resources\Api\Admin\Tutors\TutorSalariesHourRateResource;
use App\Http\Resources\Api\Admin\Tutors\TutorSalariesResource;
use App\Models\User;
use App\Traits\Helpers\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    use ApiResponseTrait;
    public function salaries(){
        $tutors = User::where('user_type_id',User::TUTOR)->get();
        return $this->apiResponse('تم رجوع المعلمين بنجاح',TutorSalariesResource::collection($tutors),true,Response::HTTP_OK);
    }
    public function salariesCalculate(Request $request){
        $request->validate([
            'hour_rate'=>'required'
        ]);
        $tutors = User::where('user_type_id',User::TUTOR)->get();
        $hour_rate = $request->hour_rate;

        $salaries = [];
        foreach ($tutors as $tutor){
            $object = ['id'=>$tutor->id,'name'=>$tutor->name,'total_hours'=>User::find($tutor->id)->billings()->sum('lecture_duration'),'salary'=>User::find($tutor->id)->billings()->sum('lecture_duration')*$hour_rate];
        array_push($salaries,$object);
        }
        return $this->apiResponse('تم رجوع المعلمين بنجاح',$salaries,true,Response::HTTP_OK);
    }
}
