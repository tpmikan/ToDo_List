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

Route::get('/', 'TodoController@index');
Route::get('create', 'TodoController@add');
Route::post('create', 'TodoController@create');
Route::get('edit', 'TodoController@edit');
Route::post('edit', 'TodoController@update');
Route::get('done', 'TodoController@done');
Route::get('delete', 'TodoController@delete');
Route::get('allDelete', 'TodoController@allDelete');
