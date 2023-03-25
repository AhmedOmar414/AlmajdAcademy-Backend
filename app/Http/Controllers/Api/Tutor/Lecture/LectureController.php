<?php

namespace App\Http\Controllers\Api\Tutor\Lecture;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tutor\Courses\CourseRequest;
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

class LectureController extends Controller
{
    use ApiResponseTrait;

    public function show($id)
    {
        $lectures = Lecture::where('course_id',$id)->paginate(10);
        return $this->apiResponseWithPaginate('تم رجوع بيانات المحاضرات بنجاح',LectureResource::collection($lectures),$lectures,true,Response::HTTP_OK);
    }

    public function store(LectureRequest $request)
    {
        $data = $request->all();
        $data['attended'] = Lecture::ATTENDED;

        $lecture = Lecture::create($data);

        //calculate billing
        $this->calculateBilling($lecture,$data);

        return $this->createdSuccessfully('تم اضافه المحاضره بنجاح',true,Response::HTTP_OK);
    }

    public function update(LectureRequest $request, string $id)
    {
        $lecture = Lecture::find($id);
        if (is_null($lecture)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي محاضرات مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        $data = $request->all();
        $lecture->update($data);
        return $this->updatedSuccessfully('تم تعديل بينات المحاضره بنجاح',LectureResource::make(Lecture::find($id)),true,Response::HTTP_OK);
    }

    public function destroy(string $id)
    {
        $lecture = Lecture::find($id);
        if (is_null($lecture)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي محاضرات مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        $lecture->delete();
        return $this->deletedSuccessfully('تم حذف المحاضره بنجاح',true,Response::HTTP_OK);
    }

    private function calculateBilling($lecture,$data){

        $billing['tutor_id'] = auth()->user()->id;
        $billing['family_id'] = $data['family_id'];
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
