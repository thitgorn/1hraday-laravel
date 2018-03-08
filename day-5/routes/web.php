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
    return view('app');
});

Route::get('/addItem/{name}', 'ItemController@addItem');

Route::get('/viewdata', 'ItemController@getItem');

Route::get('/deleteItem/{id}', 'ItemController@deleteItem');

Route::get('/doneItem/{id}', 'ItemController@doneItem');
