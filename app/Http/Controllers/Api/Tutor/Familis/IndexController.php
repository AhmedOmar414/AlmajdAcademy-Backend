<?php

namespace App\Http\Controllers\Api\Tutor\Familis;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Admin\Families\FamilyResource;
use App\Models\Family;
use App\Models\User;
use App\Traits\Helpers\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    use ApiResponseTrait;

    public function index(){
       $families = User::find(auth()->user()->id)->families;
       return $this->apiResponse('تم رجوع العائلات بنجاح',FamilyResource::collection($families),true,Response::HTTP_OK);
    }
}
