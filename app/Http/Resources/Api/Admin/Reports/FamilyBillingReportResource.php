<?php

namespace App\Http\Resources\Api\Admin\Reports;

use App\Http\Resources\Api\Admin\Families\FamilyResource;
use App\Http\Resources\Api\Admin\Tutors\TutorResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FamilyBillingReportResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'family'=>FamilyResource::make($this->family),
            'tutor'=>['id'=>$this->tutor->id,'name'=>$this->tutor->name,'email'=>$this->tutor->email,],
            'currency'=>$this->currency->name,
            'lecture_date'=>$this->lecture->lecture_date,
            'lecture_duration'=>$this->lecture_duration,
            'month'=>$this->month,
            'year'=>$this->year,
            'amount'=>$this->amount,
        ];
    }
}
