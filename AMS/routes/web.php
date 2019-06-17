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
Route::get('/','HomeController@index');
Route::get('/create','HomeController@create');

Route::post('/create','HomeController@create');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::resource('/suppliers','SupplierController');
    Route::resource('/units','UnitController');
    Route::resource('/items','ItemController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
