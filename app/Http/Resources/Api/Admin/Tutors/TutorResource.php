<?php

namespace App\Http\Resources\Api\Admin\Tutors;

use App\Http\Resources\Api\Admin\Families\FamilyResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TutorResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'families'=>FamilyResource::collection($this->families),
        ];
    }
}
