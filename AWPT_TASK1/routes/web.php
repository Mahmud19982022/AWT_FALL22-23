<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PagesControllers;
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

Route::get('/home',[PagesControllers::class, 'Home'])->name('Home');
Route::get('/product',[PagesControllers::class, 'Products']);
Route::get('/about',[PagesControllers::class, 'About']);
Route::get('/contact',[PagesControllers::class, 'Contact']);
Route::get('/ourteam',[PagesControllers::class, 'Ourteam']);
Route::post('/showProduct',[PagesControllers::class,'showProduct']);
