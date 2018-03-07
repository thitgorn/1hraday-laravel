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

Route::get('/', 'ItemController@showItem');

Route::post('/additem' , 'ItemController@PostItem');

Route::get('/deleteItem/{id}','ItemController@DeleteItem');

Route::get('/doneItem/{id}','ItemController@DoneItem');
