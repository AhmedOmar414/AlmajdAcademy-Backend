<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//ADMIN
Route::group(['middleware'=>['auth:sanctum','admin']],function (){
    Route::apiResource('/families','\App\Http\Controllers\Api\Admin\Family\FamiliesController');
    Route::apiResource('/tutors','\App\Http\Controllers\Api\Admin\Tutors\TutorsController');

    //statistics
    Route::get('/tutor-total-profits',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalMonthProfit']);
    Route::get('/tutor-total-courses',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalCourses']);
    Route::get('/tutor-total-families',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalFamilies']);

    //currencies
    Route::get('/get-currencies',[\App\Http\Controllers\Api\Admin\Currency\CurrencyController::class,'currencies']);

    //currencies
    Route::get('/get-countries',[\App\Http\Controllers\Api\Admin\Country\CountryController::class,'countries']);

    //reports
    Route::post('family-billing-report',[\App\Http\Controllers\Api\Admin\Reports\ReportsController::class,'familyBillingReport']);
});

//TUTOR
Route::group(['middleware'=>['auth:sanctum']],function (){
    Route::apiResource('/courses','\App\Http\Controllers\Api\Tutor\Course\CourseController');
    Route::apiResource('/lectures','\App\Http\Controllers\Api\Tutor\Lecture\LectureController');
    Route::get('/get-tutor-families',[\App\Http\Controllers\Api\Tutor\Familis\IndexController::class,'index']);

    //statistics
    Route::get('/tutor-total-month-hours',[\App\Http\Controllers\Api\Tutor\Statistics\IndexController::class,'totalMonthHours']);
    Route::get('/tutor-total-courses',[\App\Http\Controllers\Api\Tutor\Statistics\IndexController::class,'totalCourses']);
    Route::get('/tutor-total-families',[\App\Http\Controllers\Api\Tutor\Statistics\IndexController::class,'totalFamilies']);

});
