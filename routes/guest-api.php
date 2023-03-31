<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\Login\LoginController;
use Twilio\Rest\Client;

Route::get('login',[LoginController::class,'login']);
Route::get('whatsapp/send-test-message', [App\Http\Controllers\Controller::class, 'sendTestMessage']);

