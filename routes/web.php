<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CabController;
use App\Http\Controllers\HospitalController;

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
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('userlogin');
});
Route::view("welcome","welcome");
Route::view("contact","contact");
Route::view("about","about");

Route::view("/userregister","userregister");
Route::view("/userlogin","userlogin");
Route::view("/hospitalcart","hospitalcart");
Route::get("users",[UserController::class,'getData']);
Route::get('/searchcat',[CategoryController::class,"search"]);
Route::get('/bookingambulance',[CategoryController::class,"form"]);



Route::get('/cab_available',[CabController::class,"show"]);

Route::get('/hospitallist',[hospitalController::class,"hospital"]);
Route::post('/userregister',[UserController::class,"userregister"]);
Route::post("/login",[UserController::class,"login"]);
Route::post("addhospital",[hospitalController::class,"addhospital"]);