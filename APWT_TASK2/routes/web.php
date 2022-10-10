<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class,"login"])->name("login");
Route::post('/login',[LoginController::class,"loginSubmitted"])->name("login");

Route::get('/registration',[RegistrationController::class,"registration"])->name("registration");
Route::post('/registration',[RegistrationController::class,"registrationSubmitted"])->name("registration");

Route::get('/contact',[ContactController::class,"contact"])->name("contact");
Route::post('/contact',[ContactController::class,"contactSubmitted"])->name("contact");