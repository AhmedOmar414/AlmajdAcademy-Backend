<?php

namespace App\Http\Resources\Api\Admin\Families;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FamilyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'hour_price'=>$this->hour_price,
            'whatsapp_number'=>$this->whatsapp_number,
            'country_code'=>$this->country_code,
            'currency'=>$this->currency->name,
        ];
    }
}
