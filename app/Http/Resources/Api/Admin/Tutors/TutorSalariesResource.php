<?php

namespace App\Http\Resources\Api\Admin\Tutors;

use App\Http\Resources\Api\Admin\Families\FamilyResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TutorSalariesResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'total_hours'=>User::find($this->id)->billings()->sum('lecture_duration'),
            'salary'=>0
        ];
    }
}
