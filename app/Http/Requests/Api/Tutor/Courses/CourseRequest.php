<?php

namespace App\Http\Requests\Api\Tutor\Courses;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }

    public function rules(): array
    {
        return [
            'name'=>['required','max:100'],
            'family_id'=>['required','numeric'],
        ];
    }
}
