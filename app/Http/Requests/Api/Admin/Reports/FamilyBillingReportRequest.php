<?php

namespace App\Http\Requests\Api\Admin\Reports;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FamilyBillingReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }

    public function rules(): array
    {
        return [
            'family_id'=>['required','numeric'],
            'month'=>['required','numeric'],
            'year'=>['required','numeric'],
        ];
    }
}
