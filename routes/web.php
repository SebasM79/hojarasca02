<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantasController;
use App\Http\Controllers\ProductosController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('plantas', PlantasController::class)->names('plantas');
Route::resource('productos', ProductosController::class)->names('productos');
Route::put('/productos/{producto}', [ProductosController::class, 'update'])->name('productos.update');
