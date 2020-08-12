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
//user
Route::get('/','UserController@home');
Route::get('/registrasi','UserController@registrasi');
Route::post('/registrasi','UserController@prosesRegistrasi');
//admin
//alumni
Route::get('/admin/alumni','AlumniController@index');
//dashboard
Route::get('/admin','DashboardController@index');