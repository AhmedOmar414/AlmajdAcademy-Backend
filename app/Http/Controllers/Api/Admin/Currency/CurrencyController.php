<?php

namespace App\Http\Controllers\Api\Admin\Currency;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Traits\Helpers\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CurrencyController extends Controller
{
    use ApiResponseTrait;
    public function currencies(){
        $currencies = Currency::all();
        return $this->apiResponse('تم استرجاع العملات بنجاح',$currencies,true,Response::HTTP_OK);
    }
}
