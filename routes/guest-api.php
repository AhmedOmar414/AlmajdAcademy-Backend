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
Route::get('update-billings',function (){
    $lectures = \App\Models\Lecture::all();
    foreach ($lectures as $lecture){

        $course = Course::find($lecture->course_id);

        $billing['tutor_id'] = $course->tutor_id;
        $billing['family_id'] = $course->family_id;
        $billing['lecture_id'] = $lecture->id;
        $billing['currency_id'] = Family::find($billing['family_id'])->currency->id;
        $billing['hour_rate'] = Family::find($billing['family_id'])->hour_price;
        $billing['lecture_duration'] = $lecture->lecture_duration;
        $billing['month'] = Carbon::now()->month;
        $billing['year'] = Carbon::now()->year;
        $billing['amount'] = $billing['lecture_duration']*$billing['hour_rate'];

        Billing::create($billing);

    }
    return response()->json(['status'=>true]);

});

