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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})-> name('home');

Route::get('/productos', function () {
    return view('productos');
})-> name('productos');

Route::get('/login', function () {
    return view('login');
})-> name('login');

