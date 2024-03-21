<?php

use App\Http\Controllers\HomeController;
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
Route::get('/listreport',[HomeController::class,'listreport']);