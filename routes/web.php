<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout-page',[\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'checkoutPage'] );
Route::get('/pay/{id}/{amount}/{month}',[\App\Http\Controllers\Api\Admin\Paypal\PaymentController::class,'show'])->name('payment.show');

Route::post('/create-order', [\App\Http\Controllers\Api\Admin\Paypal\PaymentController::class,'createOrder'])->name('create-order');
Route::get('/capture-order', [\App\Http\Controllers\Api\Admin\Paypal\PaymentController::class,'captureOrder'])->name('capture-order');
Route::get('/success/{month}', [\App\Http\Controllers\Api\Admin\Paypal\PaymentController::class,'success'])->name('success');
Route::get('/cancel', [\App\Http\Controllers\Api\Admin\Paypal\PaymentController::class,'cancel'])->name('cancel');
