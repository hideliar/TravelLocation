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

//  Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::group(['namespace' => 'Admin', 'as' => 'admin::', 'prefix' => 'admin', 'middleware' => ['auth', 'acl']], function() {

    Route::get('/', ['as' => 'dashboard', 'uses' => 'HomeController@index']);
    Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@about']);

    //account--------------------------------------------------------------------------------------
     // view account
    Route::get('/account', ['as' => 'account', 'uses' => 'HomeController@account']);

     //delete account
    Route::get('deleteaccount/{id}', ['as' => 'delacc','uses' => 'HomeController@destroy']);

    // view add account
    Route::get('/addaccount', ['as' => 'addaccount', 'uses' => 'HomeController@addaccount']);

    //add account
     Route::post('add/addacc',['as'=>'acc','uses'=>'HomeController@addacc']);
    // view edit account
     Route::get('/editaccount/{id}', ['as' => 'editloca', 'uses' => 'HomeController@edit']);
    //post edit account
    Route::post('/account/update/{id}',['as'=>'upacc','uses'=>'HomeController@update']);


    //-------------------------------------------------------------------------------------

    //Location
    Route::get('/location', ['as' => 'location', 'uses' => 'LocationController@index']);

    //City
    Route::get('/city', ['as' => 'city', 'uses' => 'CityController@index']);

    //category
    Route::get('/category', ['as' => 'category', 'uses' => 'CategoryController@index']);


    // Location-----------------------------------------------------------------------------
    // view add location
    Route::get('/addlocation',['as' => 'addloca', 'uses' => 'LocationController@addlocation']);

    // add location
    Route::post('/locations/store',['as'=>'bbb','uses'=>'LocationController@store']);

     //view edit location
    Route::get('/editlocation/{id}', ['as' => 'editloca', 'uses' => 'LocationController@edit']);

    //post edit location
    Route::post('/locations/update/{id}',['as'=>'up','uses'=>'LocationController@update']);
    
    //delete location
    Route::get('deletelocation/{id}', ['as' => 'dele','uses' => 'LocationController@destroy']);
   
    //-----------------------------------------------------------------------------------------


    //delete category-------------------------------------------------------------------------
    Route::get('deletecategory/{id}', ['as' => 'delecate','uses' => 'CategoryController@destroy']);

     // view add category
    Route::get('/addcategory',['as' => 'addct', 'uses' => 'CategoryController@addcategory']);
        //admin/category/store
    //add category
    Route::post('/category/store',['as'=>'addct','uses'=>'CategoryController@store']);

     //view edit category
    Route::get('/category/edit/{id}', ['as' => 'cataa', 'uses' => 'CategoryController@edit']);
    //post edit category
    Route::post('/category/update/{id}',['as'=>'cts','uses'=>'CategoryController@update']);

    //------------------------------------------------------------------------------------------


    //City--------------------------------------------------------------------------------------
     //delete category
    Route::get('deletecity/{id}', ['as' => 'deletecity','uses' => 'CityController@destroy']);

     // view add city
    Route::get('/addcity',['as' => 'addcity', 'uses' => 'CityController@addcity']);

    //add city
    Route::post('/city/store',['as'=>'addst','uses'=>'CityController@store']);

    //view edit city
    Route::get('/city/edit/{id}', ['as' => 'cityedit', 'uses' => 'CityController@edit']);

    //post edit city
    Route::post('/city/update/{id}',['as'=>'cityps','uses'=>'CityController@update']);

    //------------------------------------------------------------------------------------------
  

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Location.index
