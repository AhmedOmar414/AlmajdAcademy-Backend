<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\Login\LoginController;
use Twilio\Rest\Client;

Route::post('login',[LoginController::class,'login']);

