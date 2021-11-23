<?php

use Illuminate\Support\Facades\Route;

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
    return view ('welcome');
});
Route::get('/tampilstring',function(){
    return('Hello Laravel');
});
Route::get('/tampilview',function(){
    return view ('Hello Laravel');
});
Route::get('/tampilview',function(){
    return view ('table');
});

Route::get('kalkulator','kalkulatorcontroller@index');
Route::get('kaltambah','kalkulatorcontroller@tambah')->name('tmbh');
Route::get('kalkurang','kalkulatorcontroller@kurang')->name('krg');
Route::get('kalkali','kalkulatorcontroller@kali')->name('kli');
Route::get('kalbagi','kalkulatorcontroller@bagi')->name('bgi');

Route::get('dosen','DosenController@index')->name('dosenList');

Route::get('/tambahdosen','DosenController@create')->name('dosenAdd');
Route::post('simpandosen','DosenController@inputdata')->name('dosenSave');

Route::get('/DosenModel/{id}/destroy','DosenController@destroy')->name('hps');

Route::get('/DosenModel/{id}/edit','DosenController@edit');
Route::post('/DosenModel/{id}/update','DosenController@update');

