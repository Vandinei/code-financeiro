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

Route::group(['middleware' => 'cors'],function(){
    Route::post('access_token','Api\AuthController@accessToken');
    Route::post('refresh_token','Api\AuthController@refreshToken');
    Route::post('logout','Api\AuthController@logout')->middleware('auth:api');
});