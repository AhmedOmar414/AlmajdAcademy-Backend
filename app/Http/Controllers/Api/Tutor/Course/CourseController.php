<?php

namespace App\Http\Controllers\Api\Tutor\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tutor\Courses\CourseRequest;
use App\Http\Resources\Api\Tutor\Courses\CourseResource;
use App\Http\Resources\Api\Tutor\Lectures\LectureResource;
use App\Models\Course;
use App\Models\Family;
use App\Traits\Helpers\ApiResponseTrait;
use App\Traits\Helpers\PaginationTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $courses = Course::where('tutor_id',auth()->user()->id)->get();
        return $this->apiResponse('تم رجوع بيانات الكورسات بنجاح',CourseResource::collection($courses),true,Response::HTTP_OK);
    }

    public function store(CourseRequest $request)
    {
        $data = $request->all();
        $data['tutor_id'] = auth()->user()->id;
        $data['hour_price'] = Family::find($data['family_id'])->hour_price;

        Course::create($data);
        return $this->createdSuccessfully('تم اضافه الكورس بنجاح',true,Response::HTTP_OK);
    }

    public function update(CourseRequest $request, string $id)
    {
        $course = Course::find($id);
        if (is_null($course)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي كورسات مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        $data = $request->all();
        $course->update($data);
        $course = Course::find($id);
        return $this->updatedSuccessfully('تم تعديل بينات الكورس بنجاح',CourseResource::make($course),true,Response::HTTP_OK);
    }

    public function destroy(string $id)
    {
        $course = Course::find($id);
        if (is_null($course)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي كورسات مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        $course->delete();
        return $this->deletedSuccessfully('تم حذف الكورس بنجاح',true,Response::HTTP_OK);
    }

    public function courseLecture($id){
        try {
            // Retrieve all lectures from the database and group them by month name
            $lectures = Course::find($id)->lectures->groupBy(function($lecture) {
                return Carbon::parse($lecture->lecture_date)->format('F');
            });

           // Create an array to hold the list of month objects
            $lectureList = [];

           // Loop through the grouped lectures and create a new object for each month
            foreach($lectures as $monthName => $monthLectures) {
                $monthObject = new \stdClass();
                $monthObject->month = $monthName;
                $monthObject->lectures = LectureResource::collection($monthLectures);
                $lectureList[] = $monthObject;
            }

            return $this->apiResponse('تم رجوع بيانات المحاضرات بنجاح',$lectureList,true,Response::HTTP_OK);
        }catch (\Exception $ex){
            return $this->apiResponse('تم رجوع بيانات المحاضرات بنجاح',null,true,Response::HTTP_OK);
        }
    }
}
