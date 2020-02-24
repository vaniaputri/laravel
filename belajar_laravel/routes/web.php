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

Route::get('/data_kk','DataKKController@index');
Route::post('/data_kk/create','DataKKController@create');
Route::get('/data_kk/{id}/edit','DataKKController@edit');
Route::post('/data_kk/{id}/update','DataKKController@update');
Route::get('/data_kk/{id}/delete','DataKKController@delete');

Route::get('/data_kk/{id}/insert','DataKKController@insert');
Route::post('/data_kk/{id}/insert_detail','DataKKController@insert_detail');
Route::get('/data_kk/{id}/detail_kk','DataKKController@detail_kk');
Route::get('/data_kk/{id}/edit_detail','DataKKController@edit_detail');
Route::post('/data_kk/{id}/update_detail','DataKKController@update_detail');
Route::get('/data_kk/{id}/delete_detail','DataKKController@delete_detail');