<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalendarController;
use App\Models\Calendar;
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
Route::get('/home',[HomeController::class,'home']);
Route::get('/lead',[HomeController::class,'lead']);
Route::get('/customer',[HomeController::class,'customer']);
Route::get('/atm',[HomeController::class,'atm']);
Route::get('/ticket',[HomeController::class,'ticket']);
Route::get('/sale',[HomeController::class,'sale']);
Route::get('/technical',[HomeController::class,'technical']);
Route::get('/listreportPM',[HomeController::class,'listreportPM']);
Route::get('/staff',[HomeController::class,'staff']);
Route::get('/createPM',[HomeController::class,'createPM']);
Route::get('/createBTI',[HomeController::class,'createBTI']);
Route::get('/listreportBTI',[HomeController::class,'listreportBTI']);
Route::get('/drewCustomerPM',[HomeController::class,'drewCustomerPM']);
Route::get('/drewTechnicalPM',[HomeController::class,'drewTechnicalPM']);
Route::get('/drewCustomerBTI',[HomeController::class,'drewCustomerBTI']);
Route::get('/drewTechnicalBTI',[HomeController::class,'drewTechnicalBTI']);
Route::get('/service',[HomeController::class,'service']);
Route::get('/manage',[HomeController::class,'manage']);
Route::get('/permission',[HomeController::class,'permission']);
Route::get('/viewReportPm',[HomeController::class,'viewReportPm']);
Route::get('/viewReportBti',[HomeController::class,'viewReportBti']);
Route::get('/listingServiceCustomer',[HomeController::class,'listingServiceCustomer']);
Route::get('/listingCallCustomer',[HomeController::class,'listingCallCustomer']);
Route::get('/listingAppointmentCustomer',[HomeController::class,'listingAppointmentCustomer']);
Route::get('/calendar',[CalendarController::class,'calendar']);
Route::get('/listingDocumentCustomer',[HomeController::class,'listingDocumentCustomer']);
Route::get('/listingQuotationCustomer',[HomeController::class,'listingQuotationCustomer']);
Route::get('/events',[CalendarController::class,'getEvents']);
Route::get('/calendar/{id}',[CalendarController::class,'getEvents']);
Route::get('/profile',[HomeController::class,'profile']);

