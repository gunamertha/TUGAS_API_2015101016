<?php

use App\Http\Controllers\TabunganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//menampilkan data
Route::get('tabungans', [TabunganController::class, 'index']);

//menampikan data berdasarkan id yg dipilih
Route::get('tabungan/{id}/show', [TabunganController::class, 'show']);

//menambahkan data
Route::post('tabungan/add', [TabunganController::class, 'store']);

//edit data pada parms
Route::put('tabungan/{id}/update', [TabunganController::class, 'update']);

//post digunakan untuk update pada postman di bagian body- form data
//Route::post('tabungan/{id}/update', [TabunganController::class, 'update']);

//delete data
Route::delete('tabungan/{id}/delete', [TabunganController::class, 'destroy']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
