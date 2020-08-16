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
    Route::get('/kuesioner','user\KuesionerController@index');
    Route::post('/kuesioner','user\KuesionerController@simpanKuesioner');

    //event
    Route::get('/event','user\EventController@index');

    //admin
    //alumni
    Route::get('/admin/alumni','admin\AlumniController@index');
    //dashboard
    Route::get('/admin','admin\DashboardController@index');
});

    Route::get('/','user\UserController@home');

    //registrasi
    Route::get('/registrasi','user\UserController@registrasi');
    Route::post('/registrasi','user\UserController@prosesRegistrasi');
    //login
    Route::get('/login','user\UserController@login')->name('login');
    Route::post('/login','user\UserController@prosesLogin');
    Route::get('/logout','user\UserController@logout');
