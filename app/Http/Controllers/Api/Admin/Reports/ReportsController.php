<?php

namespace App\Http\Controllers\Api\Admin\Reports;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\Reports\FamilyBillingReportRequest;
use App\Http\Resources\Api\Admin\Families\FamilyResource;
use App\Http\Resources\Api\Admin\Reports\FamilyBillingReportResource;
use App\Models\Billing;
use App\Traits\Helpers\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReportsController extends Controller
{
    use ApiResponseTrait;
    public function familyBillingReport(FamilyBillingReportRequest $request){
        $familyBillingReport = Billing::where('family_id',$request->family_id)->where('year',$request->year)->where('month',$request->month)->get();
        $familyBillingReport = FamilyBillingReportResource::collection($familyBillingReport);
        return $this->apiResponse('تم استرجاع التقرير بنجاح',$familyBillingReport,true,Response::HTTP_OK);
    }
}
