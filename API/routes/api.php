<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FalkutasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Models\Falkutas;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route :: get ('/falkultas', [App\Http\Controllers\FalkutasController::class, 'index']);
Route :: get ('/prodi', [ProdiController::class, 'index']);
Route :: get ('/mahasiswa',[mahasiswaController::class, 'index']);


Route :: post ('/mahasiswa',[MahasiswaController::class, 'store']);
Route :: post ('/falkultas', [FalkutasController::class, 'store']);
Route :: post ('/prodi', [ProdiController::class, 'store']);


Route :: patch('/falkultas/{falkultas}', [FalkutasController::class, 'update']);
Route :: patch('/prodi/{prodi}', [ProdiController::class, 'update']);

Route :: delete('/falkultas/{falkultas}', [FalkutasController::class, 'destroy']);
Route :: delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy']);
Route :: delete('/prodi/{prodi}', [ProdiController::class, 'destroy']);