<?php

namespace App\Http\Controllers\Api\Admin\Tutors;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Tutors\TutorRequest;
use App\Http\Requests\Api\Admin\Tutors\TutorUpdateRequest;
use App\Http\Resources\Api\Admin\Families\FamilyResource;
use App\Http\Resources\Api\Admin\Tutors\TutorResource;
use App\Models\Billing;
use App\Models\Course;
use App\Models\FamilyTutor;
use App\Models\Lecture;
use App\Models\TutorFamilies;
use App\Models\User;
use App\Traits\Helpers\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class TutorsController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {
        $tutors = User::where('user_type_id',User::TUTOR)->get();
        return $this->apiResponse('تم رجوع بيانات المعلمين بنجاح',TutorResource::collection($tutors),true,Response::HTTP_OK);
    }


    public function store(TutorRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['user_type_id'] = User::TUTOR;

        $user = User::create($data);

        $families = $data['families'];
        foreach ($families as $family){
            FamilyTutor::create(['user_id'=>$user->id,'family_id'=>$family]);
        }

        return $this->createdSuccessfully('تم اضافه المعلم بنجاح', true,Response::HTTP_OK);
    }


    public function update(TutorUpdateRequest $request, string $id)
    {
        $tutor = User::find($id);
        $data = $request->all();

        if (is_null($tutor)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي معلمين مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        if (!$request->password){
            $data['password'] = $tutor->password;
        }else{
            $data['password'] = Hash::make($data['password']);
        }
        $data['user_type_id'] = User::TUTOR;

        //update tutor families
        $families = $data['families'];

        $tutor->update($data);
        $tutor->families()->sync($families);

        $tutor = User::find($id);
        return $this->updatedSuccessfully('تم تعديل بينات المعلم بنجاح',TutorResource::make($tutor),true,Response::HTTP_OK);
    }

    public function destroy(string $id)
    {
        $tutor = User::find($id);
        if (is_null($tutor)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي معلمين مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        FamilyTutor::where('user_id',$tutor->id)->delete();
        $tutor->delete();
        $courses = Course::where('tutor_id',$tutor->id)->get();
        foreach ($courses as $cours){
            Lecture::where('course_id',$cours)->delete();
        }
        $courses = Course::where('tutor_id',$tutor->id)->delete();
        $billings = Billing::where('tutor_id',$tutor->id)->delete();
        return $this->deletedSuccessfully('تم حذف المعلم بنجاح',true,Response::HTTP_OK);
    }
}
