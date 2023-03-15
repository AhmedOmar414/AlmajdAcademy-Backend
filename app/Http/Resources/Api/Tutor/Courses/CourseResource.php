<?php

namespace App\Http\Resources\Api\Tutor\Courses;

use App\Http\Resources\Api\Admin\Families\FamilyResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'family'=>FamilyResource::make($this->family),
        ];
    }
}
