<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\QueryBuilderDemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, ini adalah route pertama saya!';
});

Route::get('/mahasiswa/jumlah-prodi', [MahasiswaController::class, 'jumlahPerProdi'])
    ->name('mahasiswa.jumlah-prodi');
Route::resource('mahasiswa', MahasiswaController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    })->name('dashboard');
});

Route::get('/sapa', function () {
    return view('sapa', [
        'nama' => 'Ahmad Fauzi',
        'kontenHtml' => '<strong>Teks Tebal</strong>',
    ]);
});

Route::post('/query-builder/tambah', [QueryBuilderDemoController::class, 'tambahMahasiswa']);
Route::post('/query-builder/update', [QueryBuilderDemoController::class, 'updateMahasiswa']);
Route::post('/query-builder/delete', [QueryBuilderDemoController::class, 'deleteMahasiswa']);
Route::get('/query-builder', [QueryBuilderDemoController::class, 'tampilkanSemua']);
Route::get('/query-builder/filter', [QueryBuilderDemoController::class, 'tampilkanFilter']);
Route::get('/query-builder/statistik', [QueryBuilderDemoController::class, 'statistikProdi']);