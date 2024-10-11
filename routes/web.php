<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\OrderController::class, 'index']);

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dpenjual', function () {
    return view('dpenjual');
});
Route::get('/dpenjual/barang', function () {
    return view('products/brgpenjual', compact('products'));

});
Route::get('/dpenjual/barang/tambah', function () {
    return view('crtbrgpenjual');
});
Route::get('/dpenjual/barang/edit', function () {
    return view('edtbrgpenjual');
});