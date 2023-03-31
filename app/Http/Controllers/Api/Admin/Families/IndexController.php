<?php

namespace App\Http\Controllers\Api\Admin\Families;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Families\FamilyRequest;
use App\Http\Resources\Api\Admin\Families\FamilyResource;
use App\Models\Family;
use App\Traits\Helpers\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    use ApiResponseTrait;
    public function getFamilies()
    {
        $families = Family::paginate(10);
        return $this->apiResponseWithPaginate('تم رجوع بيانات الأسر بنجاح',FamilyResource::collection($families),$families,true,Response::HTTP_OK);
    }

    public function storeFamily(FamilyRequest $request)
    {
        Family::create($request->all());
        return $this->createdSuccessfully('تم اضافه العائله بنجاح',true,Response::HTTP_OK);
    }

    public function updateFamily(FamilyRequest $request, string $id)
    {
        $family = Family::find($id);
        $data = $request->all();
        if (is_null($family)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي أسر مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        $family->update($data);
        $family = Family::find($id);
        return $this->updatedSuccessfully('تم تعديل بينات الاسره بنجاح',FamilyResource::make($family),true,Response::HTTP_OK);
    }

    public function destroyFamily(string $id)
    {
        $family = Family::find($id);
        if (is_null($family)){
            return $this->noDataRelatedToThisID('لم يتم العثور علي أسر مرتبطه برقم التعريف هذا',false,Response::HTTP_NO_CONTENT);
        }
        $family->delete();
        return $this->deletedSuccessfully('تم حذف الأسره بنجاح',true,Response::HTTP_OK);
    }
}
