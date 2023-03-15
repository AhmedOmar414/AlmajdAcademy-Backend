<?php

namespace App\Http\Requests\Api\Admin\Tutors;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TutorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','max:50'],
            'email'=>['email','required','max:50'],
            'password'=>['required'],
            'families.*'=>['required','numeric'],
        ];
    }
}
