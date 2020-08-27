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
    Route::post('/admin/alumni/{alumni}/hapus','admin\AlumniController@delete');

    //pertanyaan
    Route::get('/admin/pertanyaan','admin\PertanyaanController@index');
    Route::post('/admin/pertanyaan/{pertanyaan}/hapus','admin\PertanyaanController@delete');
    Route::get('/admin/pertanyaan/tambah','admin\PertanyaanController@tambah');
    Route::post('/admin/pertanyaan/tambah','admin\PertanyaanController@store');
    Route::get('/admin/pertanyaan/{pertanyaan}/edit','admin\PertanyaanController@edit');
    Route::put('/admin/pertanyaan/{pertanyaan}/edit','admin\PertanyaanController@update');

    //event
    Route::get('/admin/event','admin\EventController@index');
    Route::get('/admin/event/tambah','admin\EventController@tambah');
    Route::post('/admin/event/tambah','admin\EventController@store');
    Route::get('/admin/event/{event}/edit','admin\EventController@edit');
    Route::put('/admin/event/{event}/edit','admin\EventController@update');
    Route::post('/admin/event/{event}/hapus','admin\EventController@delete');

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
