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

Route::get('/resavations', 'ResavationController@index');
Route::get('/resavations/resavation_confirm', 'ResavationController@create');
Route::get('/resavations/store', 'ResavationController@store');
Route::delete('/resavations/{resavation}', "ResavationController@destroy");