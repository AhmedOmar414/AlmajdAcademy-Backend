<?php

use App\Models\Billing;
use App\Models\Course;
use App\Models\Family;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\Login\LoginController;
use Twilio\Rest\Client;

Route::get('login',[LoginController::class,'login']);
Route::post('whatsapp/send-test-message', function (){return "sdfds";});

