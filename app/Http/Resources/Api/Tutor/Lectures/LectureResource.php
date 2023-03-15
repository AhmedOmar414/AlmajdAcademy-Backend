<?php

namespace App\Http\Resources\Api\Tutor\Lectures;

use App\Http\Resources\Api\Tutor\Courses\CourseResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LectureResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'lecture_date'=>Carbon::parse($this->lecture_date)->format('Y-m-d'),
            'lecture_duration'=>$this->lecture_duration,
            'course'=>CourseResource::make($this->course),
            'attended'=>$this->attended == 1?'true':'false',
        ];
    }
}
