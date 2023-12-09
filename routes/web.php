<?php

use App\Http\Controllers\MahasiswasController;
use App\Models\Mahasiswas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::resource('mahasiswa', MahasiswasController::class);

Route::get('mahasiswa/{mahasiswas}', 'MahasiswasController@show')->name('mahasiswa.show');

Route::put('/mahasiswa/{mahasiswas}', [MahasiswasController::class, 'update'])->name('mahasiswa.update');

Route::delete('/mahasiswa/{mahasiswas}', 'MahasiswasController@destroy')->name('mahasiswa.destroy');
