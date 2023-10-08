<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\General;
use App\Http\Controllers\Home;
use App\Http\Controllers\LokasiUmkmController;

use App\Http\Controllers\SchemeController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UserController;

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



Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/', [Home::class, 'beranda']);


Route::get('/testing', [Home::class, 'testing']);


Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
});

// GENERAL CONTROLLER ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator,user']], function () {

    Route::get('/dashboard', [General::class, 'dashboard']);
    Route::get('/profile', [General::class, 'profile']);
    Route::get('/bantuan', [General::class, 'bantuan']);

    Route::post('/ubah_foto_profile', [General::class, 'ubahFotoProfile']);
    Route::post('/ubah_role', [General::class, 'ubahRole']);
});

// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:pimpinan']], function () {
});


// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator']], function () {
    Route::group(['prefix' => 'admin'], function () {
        // GET REQUEST
        Route::get('/pengguna', [Admin::class, 'pengguna']);
        Route::get('/fetch_data', [Admin::class, 'fetchData']);

        // CRUD PENGGUNA
        Route::post('/create_pengguna', [Admin::class, 'createPengguna']);
        Route::post('/update_pengguna', [Admin::class, 'updatePengguna']);
        Route::post('/delete_pengguna', [Admin::class, 'deletePengguna']);

        Route::get('/umkm', [UmkmController::class, 'index']);
        Route::get('/umkm/datatable', [UmkmController::class, 'datatable']);
        Route::get('/umkm/{id}/edit', [UmkmController::class, 'edit']);
        Route::get('/umkm/{id}/delete', [UmkmController::class, 'delete']);
        Route::post('/umkm/{id}/update', [UmkmController::class, 'update']);
        Route::post('/umkm', [UmkmController::class, 'store']);
        Route::get('/umkm/create', [UmkmController::class, 'create']);

        Route::get('/lokasi_umkm', [LokasiUmkmController::class, 'index']);
        Route::get('/lokasi_umkm/datatable', [LokasiUmkmController::class, 'datatable']);
        Route::post('/lokasi_umkm/store_lat', [LokasiUmkmController::class, 'storeLat']);
        Route::post('/lokasi_umkm/store_long', [LokasiUmkmController::class, 'storeLong']);

        Route::get('/peta', [LokasiUmkmController::class, 'peta']);
    });
});
