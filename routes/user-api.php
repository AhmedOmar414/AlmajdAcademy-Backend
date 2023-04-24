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
//paypal
//Route::get('/create-payment-link', 'BillingController@sendPaymentLinks');


Route::group(['middleware'=>['auth:sanctum','admin']],function (){
//
//    Route::apiResource('/families','\App\Http\Controllers\Api\Admin\Family\FamiliesController');
//    Route::apiResource('/tutors','\App\Http\Controllers\Api\Admin\Tutors\TutorsController');


    Route::get('get-families',[\App\Http\Controllers\Api\Admin\Families\IndexController::class,'getFamilies']);
    Route::post('store-family',[\App\Http\Controllers\Api\Admin\Families\IndexController::class,'storeFamily']);
    Route::put('update-family/{id}',[\App\Http\Controllers\Api\Admin\Families\IndexController::class,'updateFamily']);
    Route::delete('destroy-families/{id}',[\App\Http\Controllers\Api\Admin\Families\IndexController::class,'destroyFamily']);

    Route::get('tutors',[\App\Http\Controllers\Api\Admin\Tutors\TutorsController::class,'index']);
    Route::post('tutors',[\App\Http\Controllers\Api\Admin\Tutors\TutorsController::class,'store']);
    Route::put('tutors/{id}',[\App\Http\Controllers\Api\Admin\Tutors\TutorsController::class,'update']);
    Route::delete('tutors/{id}',[\App\Http\Controllers\Api\Admin\Tutors\TutorsController::class,'destroy']);


    //statistics
    Route::get('/total-dollars',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalDollars']);
    Route::get('/total-euro',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalEuro']);
    Route::get('/total-candain-dollar',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalCandainDollar']);
    Route::get('/total-pound',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalPound']);
    Route::get('/total-families',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalFamilies']);
    Route::get('/total-tutors',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalTutors']);
    Route::get('/total-hours',[\App\Http\Controllers\Api\Admin\Statistics\IndexController::class,'totalHours']);

    //currencies
    Route::get('/get-currencies',[\App\Http\Controllers\Api\Admin\Currency\CurrencyController::class,'currencies']);

    //currencies
    Route::get('/get-countries',[\App\Http\Controllers\Api\Admin\Country\CountryController::class,'countries']);

    //reports
    Route::post('family-billing-report',[\App\Http\Controllers\Api\Admin\Reports\ReportsController::class,'familyBillingReport']);

    //pdf billings
    Route::post('get-pdf-billing',[\App\Http\Controllers\Api\Admin\PdfBillings\PdfBillingsController::class,'generateBillingPdf']);

    //billings
    Route::get('/paid/{month}',[\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'paid']);
    Route::get('/unpaid/{month}',[\App\Http\Controllers\Api\Admin\Paypal\IndexController::class,'unPaid']);

    //salaries
    Route::get('/salaries',[\App\Http\Controllers\Api\Admin\Salaries\IndexController::class,'salaries']);
    Route::post('/salaries',[\App\Http\Controllers\Api\Admin\Salaries\IndexController::class,'salariesCalculate']);

    //tutor actions
    Route::get('tutor-courses/{id}',[\App\Http\Controllers\Api\Admin\TutorActions\ActionsController::class,'tutorCourses']);
    Route::post('/course-lectures/{id}',[\App\Http\Controllers\Api\Admin\TutorActions\ActionsController::class,'courseLectures']);
    Route::delete('delete-lecture/{id}',[\App\Http\Controllers\Api\Admin\TutorActions\ActionsController::class,'deleteLecture']);
    Route::put('update-lecture/{id}',[\App\Http\Controllers\Api\Admin\TutorActions\ActionsController::class,'updateLecture']);



});

//TUTOR
Route::group(['middleware'=>['auth:sanctum']],function (){
    Route::apiResource('/courses','\App\Http\Controllers\Api\Tutor\Course\CourseController');
    Route::apiResource('/lectures','\App\Http\Controllers\Api\Tutor\Lecture\LectureController');
    Route::get('/get-tutor-families',[\App\Http\Controllers\Api\Tutor\Familis\IndexController::class,'index']);
    Route::post('/get-course-lectures/{id}',[\App\Http\Controllers\Api\Tutor\Course\CourseController::class,'courseLecture']);

    //statistics
    Route::get('/tutor-total-month-hours',[\App\Http\Controllers\Api\Tutor\Statistics\IndexController::class,'totalMonthHours']);
    Route::get('/tutor-total-courses',[\App\Http\Controllers\Api\Tutor\Statistics\IndexController::class,'totalCourses']);
    Route::get('/tutor-total-families',[\App\Http\Controllers\Api\Tutor\Statistics\IndexController::class,'totalFamilies']);
    Route::get('/tutor-total-lectures',[\App\Http\Controllers\Api\Tutor\Statistics\IndexController::class,'totalLectures']);

});
