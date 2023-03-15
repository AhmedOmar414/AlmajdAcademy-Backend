<?php

namespace App\Http\Requests\Api\Tutor\Lectures;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LectureRequest extends FormRequest
{

    public function authorize(): bool
    {
        return Auth::check();
    }

    public function rules(): array
    {
        return [
            'course_id'=>['required','numeric'],
            'lecture_date'=>['required','date'],
            'lecture_duration'=>['required'],
        ];
    }
}
