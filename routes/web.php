<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PedidoController;

Route::get('/insertar', [PedidoController::class, 'insertarDatos']);
Route::get('/pedidos-usuario', [PedidoController::class, 'pedidosUsuario']);
Route::get('/pedidos-detalles', [PedidoController::class, 'pedidosDetalles']);
Route::get('/pedidos-rango', [PedidoController::class, 'pedidosRango']);
Route::get('/usuarios-r', [PedidoController::class, 'usuariosR']);
Route::get('/total-pedidos', [PedidoController::class, 'totalPedidosUsuario']);
Route::get('/pedidos-ordenados', [PedidoController::class, 'pedidosOrdenados']);
Route::get('/suma-total', [PedidoController::class, 'sumaTotalPedidos']);
Route::get('/pedido-economico', [PedidoController::class, 'pedidoMasEconomico']);
Route::get('/pedidos-agrupados', [PedidoController::class, 'pedidosAgrupados']);
