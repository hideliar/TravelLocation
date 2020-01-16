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

Route::group(['namespace' => 'Api'], function() {

    Route::get('/', ['as' => 'dashboard', 'uses' => 'HomeController@index']);
    http://localhost:81/TravelLocation/api/city
    Route::get('/city', ['as' => 'city', 'uses' => 'CityController@index']);
    
    //Location
    Route::get('/location', ['as' => 'location.index', 'uses' => 'LocationController@index']);
});
