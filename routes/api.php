<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API for the Keys
Route::get('keys', 'ApiController@getAllkeys');
Route::get('keys/{id}', 'ApiController@getkey');
Route::post('keys', 'ApiController@createkey');
Route::put('keys/{id}', 'ApiController@updatekey');
Route::delete('keys/{id}','ApiController@deletekey');

// API for the Vehicles
Route::get('vehicles', 'ApiController@getAllvehicles');
Route::get('vehicles/{id}', 'ApiController@getvehicle');
Route::post('vehicles', 'ApiController@createvehicle');
Route::put('vehicles/{id}', 'ApiController@updatevehicle');
Route::delete('vehicles/{id}','ApiController@deletevehicle');

// API for the Technicians
Route::get('technicians', 'ApiController@getAlltechnicians');
Route::get('technicians/{id}', 'ApiController@gettechnician');
Route::post('technicians', 'ApiController@createtechnician');
Route::put('technicians/{id}', 'ApiController@updatetechnician');
Route::delete('technicians/{id}','ApiController@deletetechnician');
