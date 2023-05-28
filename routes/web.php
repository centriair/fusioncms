<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/about-us', 'about-us');
Route::view('/contact-us', 'contact-us');
Route::view('/our-plans', 'our-plans');
Route::view('/our-services', 'our-services');
Route::view('/our-plans-daikin', 'our-plans-daikin');
Route::view('/our-plans-panasonic', 'our-plans-panasonic');
Route::view('/our-plans-midea', 'our-plans-midea');