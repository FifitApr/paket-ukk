<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\Admin_KamarController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\Admin_FHotelController;
use App\Http\Controllers\Admin_FKamarController;

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
//     return view('Admin.kamar');
// });
//Admin Kamar
Route::get('/', [Admin_KamarController::class, 'index']);
Route::get('/create-kamar', [Admin_KamarController::class, 'create']);
Route::post('/save-kamar', [Admin_KamarController::class, 'store'])->name('simpan');


Route::get('/edit-kamar/{id}', [Admin_KamarController::class, 'edit']);
Route::put('/update-kamar/{id}', [Admin_KamarController::class, 'update'])->name('update');

Route::delete('/delete-kamar/{id}', [Admin_KamarController::class, 'destroy']);

//Admin fasilitas hotel
Route::get('/fhotel', [Admin_FHotelController::class, 'index']);
Route::get('/create-fhotel', [Admin_FHotelController::class, 'create']);
Route::post('/save-fhotel', [Admin_FHotelController::class, 'store'])->name('simpan-fhotel');


Route::get('/edit-fhotel/{id}', [Admin_FHotelController::class, 'edit']);
Route::put('/update-fhotel/{id}', [Admin_FHotelController::class, 'update'])->name('update-fhotel');

Route::delete('/delete-fhotel/{id}', [Admin_FHotelController::class, 'destroy']);

//Admin fasilitas kamar
Route::get('/fkamar', [Admin_FKamarController::class, 'index']);
Route::get('/create-fkamar', [Admin_FKamarController::class, 'create']);
Route::post('/save-fkamar', [Admin_FKamarController::class, 'store'])->name('simpan-fkamar');


Route::get('/edit-fkamar/{id}', [Admin_FKamarController::class, 'edit']);
Route::put('/update-fkamar/{id}', [Admin_FKamarController::class, 'update'])->name('update-fkamar');

Route::delete('/delete-fkamar/{id}', [Admin_FKamarController::class, 'destroy']);

//RESEPSIONIS
Route::get('/resep', [ResepsionisController::class, 'index']);
Route::get('/create-resep', [ResepsionisController::class, 'create']);
Route::post('/save-resep', [ResepsionisController::class, 'store'])->name('simpan-resep');


Route::get('/edit-resep/{id}', [ResepsionisController::class, 'edit']);
Route::put('/update-resep/{id}', [ResepsionisController::class, 'update'])->name('update-resep');

Route::delete('/delete-resep/{id}', [ResepsionisController::class, 'destroy']);

// TAMU

Route::get('/tamu', function () {
    return view('Tamu.home');
});

Route::get('/book', [TamuController::class, 'index']);
Route::get('/create-book', [TamuController::class, 'create']);
Route::post('/save-book', [TamuController::class, 'store'])->name('save-book');

Route::delete('/delete-book/{id}', [TamuController::class, 'destroy']);


