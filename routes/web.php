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

Route::get('/', 'ProductController@index');
Route::post('/mysql', 'ProductController@insertToMySQL');
Route::post('/mongo', 'ProductController@insertToMongo');
Route::get('/edit/{id}/{type}', 'ProductController@formEdit');
Route::put('/edit/{id}/{type}', 'ProductController@update');
Route::delete('/mongo/{id}', 'ProductController@deleteMongo');
Route::delete('/mysql/{id}', 'ProductController@deleteMySQL');