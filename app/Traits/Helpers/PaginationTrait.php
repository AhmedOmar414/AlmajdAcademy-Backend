<?php
namespace App\Traits\Helpers;

trait PaginationTrait
{
    public function pagination($pagination){
        return [
            "current_page" => $pagination->currentPage(),
            "last_page" =>  $pagination->lastPage(),
            "per_page" =>  $pagination->perPage(),
            "total" =>  $pagination->total(),
            "path" =>  $pagination->getOptions()['path'],
        ];
    }
}
