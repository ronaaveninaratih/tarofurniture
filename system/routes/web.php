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
    return view('Home');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/base', function () {
    return view('template.base');
});

Route::get('/dashboard', function () {
    return view('backview.dashboard');
});

Route::get('/kategori', function () {
    return view('backview.kategori');
});

Route::get('/product', function () {
    return view('backview.product');
});

Route::get('/supplier', function () {
    return view('backview.supplier');
});

Route::get('/pelanggan', function () {
    return view('backview.pelanggan');
});

Route::get('/table', function () {
    return view('backview.table');
});