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

Route::get('/',"HomeController@index"); // route default

// route / user menjalankan controller UserControllers function index
// Route::get('/user', 'UsersController@index');

Route::post("contacts/acho","ContactsController@acho");

// resource untuk 1 paket
Route::get("test/list_contact","TestController@list_contact"); // karena gak masuk kedalam list resource
Route::get("test/form","TestController@form");

Route::resource('test',"TestController"); // HARUS DIBAWAH 
Route::resource("home","HomeController");
Route::resource("contacts","ContactsController");

