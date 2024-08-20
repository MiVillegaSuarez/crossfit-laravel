<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\LoginController@login');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard');

Route::get('/create-account', 'App\Http\Controllers\UsersController@createAccount');
Route::get('/delete-account', 'App\Http\Controllers\UsersController@deleteAccount');
Route::get('/forgot-password', 'App\Http\Controllers\UsersController@forgotPassword');
Route::get('/new-password', 'App\Http\Controllers\UsersController@newPassword');

Route::post('/create-account/new-user', 'App\Http\Controllers\UsersController@newUser')->name('users.newUser');





//Rutas de funciones de test
Route::get('/test/prueba', 'App\Http\Controllers\TestController@testRoutes');
Route::get('/test/prueba/{id}', 'App\Http\Controllers\TestController@testParametro');
Route::get('/test/view-parametro', 'App\Http\Controllers\TestController@testViewParametro');
Route::get('/test/view-folder', 'App\Http\Controllers\TestController@testViewFolder');