<?php
namespace App\Traits\Helpers;

trait ApiResponseTrait
{
    use PaginationTrait;
    public function apiResponse($message, $data = null,bool $status,$code){
        return response()->json([
            'message'=>$message,
            'data'=>$data,
            'status'=>$status,
            'code'=>$code,
        ]);
    }
    public function apiResponseWithPaginate($message, $data = null,$pagination,bool $status,$code){
        return response()->json([
            'message'=>$message,
            'data'=>$data,
            'pagination'=>$this->pagination($pagination),
            'status'=>$status,
            'code'=>$code,
        ]);
    }
    public function createdSuccessfully($message,bool $status,$code){
        return response()->json([
            'message'=>$message,
            'status'=>$status,
            'code'=>$code,
        ]);
    }

    public function deletedSuccessfully($message,bool $status,$code){
        return response()->json([
            'message'=>$message,
            'status'=>$status,
            'code'=>$code,
        ]);
    }

    public function updatedSuccessfully($message,$data,bool $status,$code){
        return response()->json([
            'message'=>$message,
            'data'=>$data,
            'status'=>$status,
            'code'=>$code,
        ]);
    }

    public function noDataRelatedToThisID($message,bool $status,$code){
        return response()->json([
            'message'=>$message,
            'status'=>$status,
            'code'=>$code,
        ]);
    }
}
