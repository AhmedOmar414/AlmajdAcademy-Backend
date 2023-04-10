<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Traits\Helpers\ApiResponseTrait;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    use ApiResponseTrait;

    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()){

            if (auth()->user()->user_type_id == User::ADMIN){
                return $next($request);
            }if (auth()->user()->user_type_id == User::TUTOR){
                return $this->apiResponse(message: 'ليست لديك الصلاحيات لننفيذ للمتابعه',data: null,status: false,code: \Illuminate\Http\Response::HTTP_UNAUTHORIZED)->setStatusCode(401);
            }
        }
    }
}
