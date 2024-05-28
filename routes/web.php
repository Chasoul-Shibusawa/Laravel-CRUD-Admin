<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SesiController::class,'index']);
Route::post('/', [SesiController::class,'login']);

// login
Route::get('mahasiswa/dashboard', [AdminController::class, 'mahasiswa']);
Route::get('admin/dashboard', [AdminController::class, 'admin']);
Route::get('dosen/dashboard', [AdminController::class, 'dosen']);

// register
route::get('/register', [RegisterController::class,'register']);
route::post('/create', [RegisterController::class,'create']);

Route::get('admin/dashboard', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/dashboard', [MahasiswaController::class, 'matkuls']);

Route::post('admin/dashboard/hapus', [MahasiswaController::class, 'hapus'])->name('admin.dashboard.hapus');

Route::post('admin/dashboard/tambah', [MahasiswaController::class, 'tambah'])->name('admin.dashboard.tambah');

Route::post('admin/dashboard/edit', [MahasiswaController::class, 'edit'])->name('admin.dashboard.edit');