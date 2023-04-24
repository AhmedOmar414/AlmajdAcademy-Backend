<?php

namespace App\Http\Controllers\Api\Admin\TutorActions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tutor\Lectures\LectureRequest;
use App\Http\Resources\Api\Tutor\Courses\CourseResource;
use App\Http\Resources\Api\Tutor\Lectures\LectureResource;
use App\Models\Billing;
use App\Models\Course;
use App\Models\Family;
use App\Models\Lecture;
use App\Traits\Helpers\ApiResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ActionsController extends Controller
{
    use ApiResponseTrait;
    public function tutorCourses($id){
        $courses = Course::where('tutor_id',$id)->get();
        return $this->apiResponse('تم رجوع بيانات الكورسات بنجاح',CourseResource::collection($courses),true,Response::HTTP_OK);
    }

    public function courseLectures(Request $request,$id){
        try {
            $lectures = Lecture::where('course_id', $id)
                ->whereMonth('lecture_date', $request->month)
                ->get();
            return $this->apiResponse('تم رجوع بيانات المحاضرات بنجاح',LectureResource::collection($lectures),true,Response::HTTP_OK);
        }catch (\Exception $ex){
            return $this->apiResponse('تم رجوع بيانات المحاضرات بنجاح',null,true,Response::HTTP_OK);
        }
    }

    public function deleteLecture($id){
        $billing = Billing::where('lecture_id',$id)->first()->delete();
        $lecture = Lecture::find($id)->delete();
        return $this->deletedSuccessfully('تم حذف المحاضره بنجاح',true,Response::HTTP_OK);
    }
    public function updateLecture(LectureRequest $request, string $id)
    {
        $lecture = Lecture::find($id);
        if (is_null($lecture)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي محاضرات مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        $data = $request->all();
        $lecture->update($data);

        $billing = Billing::where('lecture_id',$id)->delete();

        $course = Course::find($data['course_id']);
        $data['family_id'] = $course->family_id;
        $data['attended'] = Lecture::ATTENDED;
        //calculate billing
        $this->calculateBilling($lecture,$data,$data['family_id']);

        return $this->updatedSuccessfully('تم تعديل بينات المحاضره بنجاح',LectureResource::make(Lecture::find($id)),true,Response::HTTP_OK);
    }

    private function calculateBilling($lecture,$data,$family_id){

        $billing['tutor_id'] = auth()->user()->id;
        $billing['family_id'] = $family_id;
        $billing['lecture_id'] = $lecture->id;
        $billing['currency_id'] = Family::find($data['family_id'])->currency->id;
        $billing['hour_rate'] = Family::find($data['family_id'])->hour_price;
        $billing['lecture_duration'] = $data['lecture_duration'];
        $billing['month'] = Carbon::now()->month;
        $billing['year'] = Carbon::now()->year;
        $billing['amount'] = $billing['lecture_duration']*$billing['hour_rate'];

        Billing::create($billing);
    }
}
