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


Route::post('/create-payment-link', [\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'sendPaymentLinks'])->name('payment.create');
Route::get('/payment-success/{family_id}', [\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'success'])->name('payment.success');
Route::get('/cancel-payment', [\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'cancel'])->name('payment.cancel');
