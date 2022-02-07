<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\FrontendController;


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

Route::resource('/', FrontendController::class);

Auth::routes(
    [
        'register' => false
    ]
);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('penumpang', PenumpangController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('kereta', KeretaController::class);
Route::resource('tiket', TiketController::class);
Route::resource('dataTransaksi', DataTransaksiController::class);

//Hanya untuk role admin
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
//     Route::get('/', function(){
//         return 'halaman admin';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile admin';
//     });
// });

// //hanya untuk role pengguna
// Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function(){
//     Route::get('/', function(){
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function(){
//         return 'halaman profile pengguna';
//     });
// });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){

// Route::get('penumpang', function(){
// return view('penumpang.index');
// })->middleware(['role:pengguna']);

// Route::get('transaksi', function(){
// return view('transaksi.index');
// })->middleware(['role:admin']);
// });
