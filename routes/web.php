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

Route::get('/',['as'=>'index','uses'=>'searchController@index']);
// Route::post('/searchRequest',['as'=>'searchRequest','uses'=>'searchController@searchRequest']);
// Route::get('/search&page=1&query={$request}',['as'=>'search','uses'=>'searchController@search']);
