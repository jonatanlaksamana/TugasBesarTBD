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


    // Route::get('/', 'indexcontroller@index');
Route::get('/jadwals/{id}' , 'JadwalController@index')->name('jadwal.senin');
Route::get('/jadwals/{id}' , 'JadwalController@index')->name('jadwal.selasa');
Route::get('/rabu' , 'JadwalController@index3')->name('jadwal.rabu');
Route::get('/kamis' , 'JadwalController@index4')->name('jadwal.kamis');
Route::get('/jumat' , 'JadwalController@index5')->name('jadwal.jumat');
\
Route::get('/login' , 'LoginController@index')->name('login.log');
Route::get('/home' , 'HomeController@index')->name('home.menu');
Route::post('/login','LoginController@login')->name('signIn');
