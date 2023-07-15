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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kontak', [App\Http\Controllers\kontakController::class, 'index']);
Route::get('/kontak/create', [App\Http\Controllers\kontakController::class, 'create']);
Route::post('/kontak', [App\Http\Controllers\kontakController::class, 'store']);
Route::get('/kontak/{id}/edit', [App\Http\Controllers\kontakController::class, 'edit']);
Route::patch('/kontak/{id}', [App\Http\Controllers\kontakController::class, 'update']);
Route::delete('/kontak/{id}', [App\Http\Controllers\kontakController::class, 'destroy']);

Route::get('/pesanan', [App\Http\Controllers\pesananController::class, 'index']);
Route::get('/pesanan/create', [App\Http\Controllers\pesananController::class, 'create']);
Route::post('/pesanan', [App\Http\Controllers\pesananController::class, 'store']);
Route::get('/pesanan/{id}/edit', [App\Http\Controllers\pesananController::class, 'edit']);
Route::patch('/pesanan/{id}', [App\Http\Controllers\pesananController::class, 'update']);
Route::delete('/pesanan/{id}', [App\Http\Controllers\pesananController::class, 'destroy']);

Route::get('/produk', [App\Http\Controllers\produkController::class, 'index']);
Route::get('/produk/create', [App\Http\Controllers\produkController::class, 'create']);
Route::post('/produk', [App\Http\Controllers\produkController::class, 'store']);
Route::get('/produk/{id}/edit', [App\Http\Controllers\produkController::class, 'edit']);
Route::patch('/produk/{id}', [App\Http\Controllers\produkController::class, 'update']);
Route::delete('/produk/{id}', [App\Http\Controllers\produkController::class, 'destroy']);