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


Route::get('/jadwals/{id}' , 'JadwalController@index')->name('jadwal.senin');
Route::get('/jadwals/{id}' , 'JadwalController@index')->name('jadwal.selasa');
Route::get('/' , 'HomeController@index')->name('home.menu');
Route::post('/login','LoginController@login')->name('signIn');
Route::get('/pilihjadwal','PilihJadwalController@index')->name('pilihJadwal.choose');
Route::get('/scheduleSaya','MyScheduleController@index')->name('schedule.choose');
Route::post('/test' , 'JadwalController@pilihJadwal')->name('pilih.jadwal');

Route::get('/konfirmasiPilihan','PilihJadwalController@konfirmasi')->name('schedule.choose');
