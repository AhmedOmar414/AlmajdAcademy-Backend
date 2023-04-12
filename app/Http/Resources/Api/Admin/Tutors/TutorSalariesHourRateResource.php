<?php

namespace App\Http\Resources\Api\Admin\Tutors;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TutorSalariesHourRateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        dd($this->resource->additional['hour_rate'] ?? '');
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'total_hours'=>User::find($this->id)->billings()->sum('lecture_duration'),
            'salary'=>0
        ];
    }
}
