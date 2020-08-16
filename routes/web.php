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
Route::group(['middleware' => ['auth','cekRole:user,admin']], function () {
    //user
    //kuesioner
    Route::get('/kuesioner','KuesionerController@index');
    Route::post('/kuesioner','KuesionerController@simpanKuesioner');

    //admin
    //alumni
    Route::get('/admin/alumni','AlumniController@index');
    //dashboard
    Route::get('/admin','DashboardController@index');
});

    Route::get('/','UserController@home');

    //registrasi
    Route::get('/registrasi','UserController@registrasi');
    Route::post('/registrasi','UserController@prosesRegistrasi');
    //login
    Route::get('/login','UserController@login')->name('login');
    Route::post('/login','UserController@prosesLogin');
    Route::get('/logout','UserController@logout');
