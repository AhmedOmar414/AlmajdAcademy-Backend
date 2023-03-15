<?php

namespace App\Http\Resources\Api\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'type'=>$this->returnType($this->user_type_id)
        ];
    }
    public function returnType($type){
        if ($type == 0){
            return 'admin';
        }elseif ($type == 1){
            return 'tutor';
        }
    }
}
