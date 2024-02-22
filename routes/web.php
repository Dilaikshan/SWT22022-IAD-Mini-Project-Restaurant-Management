<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;

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


Route::view('/','home')->name('home');
Route::view('/about','about');
Route::view('/contact','contact')->name('contact');
Route::view('/book','booking');
Route::view('/menu','menu');
Route::view('/service','service');
Route::view('/team','team');
Route::view('/feed','feedback');

Route::post('/bookTable',[BookingController::class,'insertData']);
Route::post('/reviewPost',[ReviewController::class,'insertData']);


