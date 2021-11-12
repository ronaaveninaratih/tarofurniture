<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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

Route::get('/home', [HomeController::class, 'showhome']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/kategori', [HomeController::class, 'showkategori']);
Route::get('/supplier', [HomeController::class, 'showsupplier']);
Route::get('/product', [HomeController::class, 'showproduct']);
Route::get('/pelanggan', [HomeController::class, 'showpelanggan']);
Route::get('/login', [HomeController::class, 'showlogin']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('/base', function () {
    return view('template.base');
});

Route::get('/table', function () {
    return view('backview.table');
});