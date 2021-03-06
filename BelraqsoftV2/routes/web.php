<?php

use App\Http\Controllers\generalController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ExistenciasController;
use App\Http\Controllers\LoginsController;
use App\Models\Proveedor;
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

Route::get('/', [LoginsController::class, "index"])->name('loginIndex');
Route::get('Reportes', [ReportesController::class, "index"])->name('reporteIndex');

Route::get('Clientes', [ClientesController::class, "index"])->name('clienteIndex');
Route::post('Clientes', [ClientesController::class, "create"])->name('clienteRegistrar');
Route::post('Clientes/{cliente?}', [ClientesController::class, "actualizarEstado"])->name('clienteEstado');
Route::put('Clientes/{cliente?}', [ClientesController::class, "actualizar"])->name('clienteActualizar');
Route::delete('Clientes/{cliente?}', [ClientesController::class, "eliminar"])->name('clienteEliminar');

Route::get('Usuarios', [UsuariosController::class, "index"])->name('usuarioIndex');
Route::post('Usuarios', [UsuariosController::class,"create"])->name('usuarioRegistrar');
Route::put('Usuarios/{usuario?}', [UsuariosController::class,"update"])->name('usuarioActualizar');
Route::delete('Usuarios/{usuario?}', [UsuariosController::class, "delete"])->name('usuarioEliminar');
Route::post('Usuarios/{usuario?}', [UsuariosController::class, "updateStatus"])->name('usuarioEstado');
Route::get('users', [UsuariosController::class, "index"])->name('users');

Route::get('Compras', [ComprasController::class, "index"])->name('compraIndex');
Route::get('Compras/Registrar', [ComprasController::class, "registrar"])->name('compraRegistrar');
Route::get('Compras/Editar', [ComprasController::class, "editar"])->name('compraEditar');

Route::get('Pedidos', [PedidosController::class, "index"])->name('pedidoIndex');
Route::post('Pedidos/Registrar', [PedidosController::class, "create"])->name('pedidoRegistrar');
Route::post('Detalles/{Pedido?}', [PedidosController::class, "iniciodetalle"])->name('pedidodetalle');


Route::get('Ventas', [VentasController::class, "index"])->name('ventaIndex');
Route::put('Ventas/{venta?}', [VentasController::class, "actualizar"])->name('ventaActualizar');
Route::post('Ventas/{venta?}', [VentasController::class, "actualizarEstado"])->name('ventaEstado');

Route::get('Proveedores', [ProveedoresController::class, "index"])->name('proveedorIndex');
Route::post('Proveedores', [ProveedoresController::class, "create"])->name('proveedorRegistrar');
Route::post('Proveedores/{Proveedor?}', [ProveedoresController::class, "actualizarEstado"])->name('proveedorEstado');
Route::put('Proveedores/{Proveedor?}', [ProveedoresController::class, "actualizar"])->name('proveedorActualizar');
Route::delete('Proveedores/{Proveedor?}', [ProveedoresController::class, "eliminar"])->name('ProveedorEliminar');

Route::get('Existencias', [ExistenciasController::class, "index"])->name('existenciaIndex');
Route::post('Existencias', [ExistenciasController::class, "create"])->name('existenciaRegistrar');
Route::post('Existencias/{producto?}', [ExistenciasController::class, "actualizarEstado"])->name('productoEstado');
Route::put('Existencias/{producto?}', [ExistenciasController::class, "actualizar"])->name('existenciaActualizar');
Route::delete('Existencias/{producto?}', [ExistenciasController::class, "eliminar"])->name('existenciaEliminar');

Route::get('dashboard', [LoginsController::class, "dashboard"])->name('dashboard.dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);
// ->group(function () {
//      Route::get('/dashboard', function () {
//          return view('dashboard');
//      })->name('dashboard');
//     Route::get('dashboard', [ReportesController::class, "index"])->name('reporteIndex');
// });
