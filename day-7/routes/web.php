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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view', 'ItemController@getItems');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ItemController@getItem')->middleware('auth');

Route::post('/additem', 'ItemController@addItem')->middleware('auth');

Route::get('/toggleItem/{id}' , 'ItemController@toggleItem')->middleware('auth');

Route::get('/deleteItem/{id}' , 'ItemController@deleteItem')->middleware('auth');
