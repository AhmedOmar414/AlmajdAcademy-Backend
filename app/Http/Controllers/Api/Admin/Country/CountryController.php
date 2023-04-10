<?php

namespace App\Http\Controllers\Api\Admin\Country;

use App\Http\Controllers\Controller;
use App\Traits\Helpers\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webpatser\Countries\Countries;

class CountryController extends Controller
{
    use ApiResponseTrait;
    public function countries(){
        $countries = new Countries();
        $countryList = $countries->getList();

        $countries = []; // create an empty array
        foreach ($countryList as $country) {
            $countries[] = [
                'country_name' => $country['name'] ?? '',
                'country_code' => $country['country-code'] ?? ''
            ];
        }
        return $this->apiResponse('تم استرجاع بينات الدول بنجاح',$countries,true,Response::HTTP_OK);

    }
}
