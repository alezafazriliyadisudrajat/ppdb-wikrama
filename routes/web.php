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

Route::get('/', function () {
    return view('index');
});
Route::get('/beranda', function () {
    return view('index');
});
Route::get('/tentang', function () {
    return view('about');
});
Route::get('/jurusan', function () {
    return view('jurusan');
});
Route::get('/testimoni', function () {
    return view('testimoni');
});
Route::get('/kontak', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});