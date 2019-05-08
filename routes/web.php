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
Route::get('/senin' , 'JadwalController@index')->name('jadwal.senin');
Route::get('/login' , 'LoginController@index')->name('login.log');
Route::get('/home' , 'HomeController@index')->name('home.menu');
Route::post('/login','LoginController@login')->name('signIn');
Route::get('/pilihjadwal','PilihJadwalController@index')->name('pilihJadwal.choose');
