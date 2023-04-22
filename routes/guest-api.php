<?php

use App\Models\Billing;
use App\Models\Course;
use App\Models\Family;
use App\Models\Lecture;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\Login\LoginController;
use Twilio\Rest\Client;

Route::get('login',[LoginController::class,'login']);
Route::post('/send-test-message',[\App\Http\Controllers\Controller::class,'whatsappTest'] );
Route::get('/users-billings',[\App\Http\Controllers\Api\Admin\Paypal\BillingsController::class,'usersBillings'] );
Route::post('/users-billings/search',[\App\Http\Controllers\Api\Admin\Paypal\BillingsController::class,'usersBillingsSearch'] );


Route::post('/create-payment-link', [\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'sendPaymentLinks'])->name('payment.create');
Route::get('/payment-success/{family_id}', [\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'success'])->name('payment.success');
Route::get('/cancel-payment', [\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'cancel'])->name('payment.cancel');


////update lectures billings
//Route::get('/update-billings',function (){
//    $lectures = \App\Models\Lecture::all();
//    foreach ($lectures as $lecture){
//        $data['family_id'] = $lecture->family_id;
//        $billing['family_id'] = $data['family_id'];
//        $billing['tutor_id'] = $lecture->course->tutor_id;
//        $billing['lecture_id'] = $lecture->id;
//        $billing['currency_id'] = Family::find($data['family_id'])->currency->id;
//        $billing['hour_rate'] = Family::find($data['family_id'])->hour_price;
//        $billing['lecture_duration'] = $lecture->lecture_duration;
//        $billing['month'] = Carbon::now()->month;
//        $billing['year'] = Carbon::now()->year;
//        $billing['amount'] = $billing['lecture_duration']*$billing['hour_rate'];
//        Billing::create($billing);
//    }
//    dd("done ya bro");
//
//});
Route::post('/calculate-tutor-billings', function (Request $request){
    $courses = Course::where('tutor_id',$request->id)->get();
    $total = 0;
    foreach ($courses as $cours){
      $total += $cours->lectures->sum('lecture_duration');
    }
    dd($total);
});
