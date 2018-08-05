<?php

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

Route::get('/', 'HomeController@front');
Route::post('/submit', 'HomeController@submit');
Route::get('/refresh_captcha', 'HomeController@refreshCaptcha');
