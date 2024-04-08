<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MedicamentoController;


// Aquí puedes registrar tus rutas web o API
require __DIR__.'/api.php';

Route::post('/clientes', [ClienteController::class, 'store']);

Route::prefix('comprobantes')->group(function () {
    // Ruta para mostrar todos los comprobantes
    Route::get('/', [ComprobanteController::class, 'index']);

    // Ruta para mostrar un comprobante específico
    Route::get('/{id}', [ComprobanteController::class, 'show']);

    // Ruta para crear un nuevo comprobante
    Route::post('/', [ComprobanteController::class, 'store']);

    // Ruta para actualizar un comprobante existente
    Route::put('/{id}', [ComprobanteController::class, 'update']);

    // Ruta para eliminar un comprobante
    Route::delete('/{id}', [ComprobanteController::class, 'destroy']);
});

Route::prefix('pedidos')->group(function () {
    // Ruta para mostrar todos los pedidos
    Route::get('/', [PedidoController::class, 'index']);

    // Ruta para mostrar un pedido específico
    Route::get('/{id}', [PedidoController::class, 'show']);

    // Ruta para crear un nuevo pedido
    Route::post('/', [PedidoController::class, 'store']);

    // Ruta para actualizar un pedido existente
    Route::put('/{id}', [PedidoController::class, 'update']);

    // Ruta para eliminar un pedido
    Route::delete('/{id}', [PedidoController::class, 'destroy']);
});

// Rutas para empleados
Route::prefix('empleados')->group(function () {
    Route::get('/', [EmpleadoController::class, 'index']);
    Route::get('/{id}', [EmpleadoController::class, 'show']);
    Route::post('/', [EmpleadoController::class, 'store']);
    Route::put('/{id}', [EmpleadoController::class, 'update']);
    Route::delete('/{id}', [EmpleadoController::class, 'destroy']);
});

// Rutas para farmacias
Route::prefix('farmacias')->group(function () {
    Route::get('/', [FarmaciaController::class, 'index']);
    Route::get('/{id}', [FarmaciaController::class, 'show']);
    Route::post('/', [FarmaciaController::class, 'store']);
    Route::put('/{id}', [FarmaciaController::class, 'update']);
    Route::delete('/{id}', [FarmaciaController::class, 'destroy']);
});

Route::prefix('medicamentos')->group(function () {
    Route::get('/', [MedicamentoController::class, 'index']);
    Route::get('/{id}', [MedicamentoController::class, 'show']);
    Route::post('/', [MedicamentoController::class, 'store']);
    Route::put('/{id}', [MedicamentoController::class, 'update']);
    Route::delete('/{id}', [MedicamentoController::class, 'destroy']);
});

Route::get('/', function () {
    return view('welcome');
});

