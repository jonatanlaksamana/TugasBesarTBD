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
Route::get('/home' , 'HomeController@index')->name('home.menu');
Route::get('/','LoginController@index')->name('login');
Route::post('/login','LoginController@login')->name('signIn');
Route::get('/pilihjadwal','PilihJadwalController@index')->name('pilihJadwal.choose');
Route::get('/scheduleSaya','MyScheduleController@index')->name('schedule.choose');
Route::post('/test' , 'JadwalController@pilihJadwal')->name('pilih.jadwal');
Route::get('/konfirmasiPilihan','PilihJadwalController@konfirmasi')->name('schedule.choose');
Route::post('/halojanto' , 'PilihJadwalController@isiJadwal' )->name('isi.Jadwal');
Route::post('/logout', 'LoginController@logout')->name('logout');
Route::get('/notif','JadwalController@jadwalNotif')->name('notif');
Route::post('/jadwalsaya/{id}' , 'JadwalController@jadwalSaya')->name('jadwal.saya');