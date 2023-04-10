<?php

namespace App\Http\Requests\Api\Admin\Families;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FamilyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }

    public function rules(): array
    {
        return [
            'name'=>['required','max:50'],
            'hour_price'=>['required'],
            'whatsapp_number'=>['required','numeric'],
            'currency_id'=>['required'],
            'country_code'=>'',
        ];
    }
}
