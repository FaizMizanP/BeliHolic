<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');

});

Auth::routes();

Route::get('/edit-profile', function() {
    $users = Auth::user();
    
    return view('auth.edit-profile');

})->name("edit-profile");

Route::get('/detail-products', function() {
    return view('detail-product');

})->name("detail-product");

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/add-barang', [App\Http\Controllers\BarangController::class, 'create'])->name('add-barang');

Route::post('/add-cart', [App\Http\Controllers\CartController::class, 'create'])->name('add-cart' );

Route::delete('/cart', [App\Http\Controllers\CartController::class, 'destroy'])->name('delete-cart');

Route::post('/pembelian', [App\Http\Controllers\PembelianController::class, 'create'])->name('pembelian');

//Route::get('/test', [App\Http\Controllers\PembelianController::class, 'detailPembelian']);
