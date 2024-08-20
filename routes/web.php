<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', 'App\Http\Controllers\LoginController@login');
Route::get('/create-account', 'App\Http\Controllers\CreateAccountController@createAccount');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard');
Route::get('/delete-account', 'App\Http\Controllers\DeleteAccountController@deleteAccount');
Route::get('/forgot-password', 'App\Http\Controllers\ForgotPasswordController@forgotAccount');
Route::get('/new-password', 'App\Http\Controllers\NewPasswordController@newPassword');



Route::get('/welcome', function () {
    return view('welcome');
});



//Rutas de funciones
Route::get('/test/prueba', 'App\Http\Controllers\TestController@testRoutes');
Route::get('/test/prueba/{id}', 'App\Http\Controllers\TestController@testParametro');
Route::get('/test/view-parametro', 'App\Http\Controllers\TestController@testViewParametro');
Route::get('/test/view-folder', 'App\Http\Controllers\TestController@testViewFolder');