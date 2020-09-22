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

Route::get('/', 'KeyController@getAllkeys');

// Keys
Route::get('listkeys', 'KeyController@getAllkeys');
Route::get('editkey/{id}', 'KeyController@getkey');
Route::post('createkey', 'KeyController@createkey');
Route::put('updatekey/{id}', 'KeyController@updatekey');
Route::get('deketekey/{id}','KeyController@deletekey');

// Vehicles


// Technicians
