<?php

namespace App\Http\Controllers\Api\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Login\LoginRequest;
use App\Http\Resources\Api\User\UserResource;
use App\Models\User;
use App\Traits\Helpers\ApiResponseTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    use ApiResponseTrait;

    public function login(LoginRequest $request){
        if (!Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return $this->apiResponse(message: 'هذه البيانات ليست مسجله لدينا يرجي التأكد من الاييميل والرقم السري ',data: null,status: false,code: Response::HTTP_UNAUTHORIZED)->setStatusCode(401);
        }
        $user = User::where('email',$request->email)->first();
        $user = UserResource::make($user);
        return \response()->json(['message'=>'تم تسجيل الدخول بنجاح','data'=>['user'=>$user,'token'=>$this->createUserToken($user)],'status'=>true,'code'=>Response::HTTP_OK])->header('x-mock-response-code',401);
    }

    public function createUserToken($user){
        return $user->createToken('user_token')->plainTextToken;
    }
}
