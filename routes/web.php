<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index']);

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::resource('kategori', KategoriController::class);
    Route::get('deletekategori/{kategori}', [KategoriController::class, 'destroy'])->name('deletekategori');
    
});

Route::middleware(['auth', 'editor'])->group(function () {
    
    Route::resource('buku', BukuController::class);
    Route::get('deletebuku/{buku}', [BukuController::class, 'destroy'])->name('deletebuku');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
