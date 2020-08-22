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
    Route::get('/kuesioner','user\UserController@kuesioner');
    Route::post('/kuesioner','user\UserController@simpanKuesioner');

    //event
    Route::get('/event','user\UserController@event');

    //alumni
    Route::get('/alumni','user\UserController@alumni');

    //admin
    //alumni
    Route::get('/admin/alumni','admin\AlumniController@index');
    Route::get('/admin/alumni/{alumni}/profile','admin\AlumniController@profile');
    Route::put('/admin/alumni/{alumni}/edit','admin\AlumniController@update');
    Route::post('/admin/alumni/{alumni}/delete','admin\AlumniController@delete');
    //dashboard
    Route::get('/admin','admin\DashboardController@index');
});
    //beranda
    Route::get('/','user\UserController@home');

    //registrasi
    Route::get('/registrasi','AuthController@registrasi');
    Route::post('/registrasi','AuthController@prosesRegistrasi');

    //login
    Route::get('/login','AuthController@login')->name('login');
    Route::post('/login','AuthController@prosesLogin');
    Route::get('/logout','AuthController@logout');
