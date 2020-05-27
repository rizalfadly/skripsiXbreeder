<?php

use Illuminate\Http\Request;

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

Route::get('/person', 'personController@all');
Route::get('/person/{id}', 'personController@show');
Route::post('/person', 'personController@store');
Route::put('/person/{id}', 'personController@update');
Route::delete('/person/{id}', 'personController@delete');
