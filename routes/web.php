<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('register','index');

Route::view('persoanl-loan','personal-loan');
Route::view('persoanl-loan-user','persoanl-loan-user');
Route::view('personal-loan-info','personal-loan-index');
Route::view('register-cibil','cibli-register');
Route::view('register-cibil-user','cibil-user-register');

