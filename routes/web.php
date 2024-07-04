<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {
    // Bagian Login
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'action_login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    // Bagian Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dasjur', [DashboardController::class, 'indjur']);

    // Bagian Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

    Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
    Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'action_tambah']);

    Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
    Route::post('/mahasiswa/{id}/edit', [MahasiswaController::class, 'action_edit']);

    Route::get('/mahasiswa/{id}/hapus', [MahasiswaController::class, 'hapus']);

    // Bagian Jurusan
    Route::get('/jurusan', [JurusanController::class, 'index']);

    Route::get('/jurusan/tambah', [JurusanController::class, 'tambah']);
    Route::post('/jurusan/tambah', [JurusanController::class, 'action_tambah']);

    Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit']);
    Route::post('/jurusan/{id}/edit', [JurusanController::class, 'action_edit']);

    Route::get('/jurusan/{id}/hapus', [JurusanController::class, 'hapus']);

    // Bagian Fakultas
    Route::get('/fakultas', [FakultasController::class, 'index']);

    Route::get('/fakultas/tambah', [FakultasController::class, 'tambah']);
    Route::post('/fakultas/tambah', [FakultasController::class, 'action_tambah']);

    Route::get('/fakultas/{id}/edit', [FakultasController::class, 'edit']);
    Route::post('/fakultas/{id}/edit', [FakultasController::class, 'action_edit']);

    Route::get('/fakultas/{id}/hapus', [FakultasController::class, 'hapus']);

    // Bagian Logout
    Route::get('/logout', [LoginController::class, 'logout']);
});
