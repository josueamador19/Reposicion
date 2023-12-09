<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

####Empleados##
Route::get('/empleados',[EmpleadoController::class,'index'])->name('empleado.inicio');
Route::get('/empleados/crear',[EmpleadoController::class,'create'])->name('empleado.create');
Route::post('/empleados/guardar',[EmpleadoController::class,'guardar'])->name('empleado.guardar');

####Productos##
Route::get('/productos',[ProductoController::class,'index'])->name('producto.inicio');
Route::get('/productos/crear',[ProductoController::class,'create'])->name('producto.create');
Route::post('/productos/guardar',[ProductoController::class,'guardar'])->name('producto.guardar');
####Proveedores##
Route::get('/proveedores',[ProveedoresController::class,'index'])->name('proveedor.inicio');
Route::get('/proveedores/crear',[ProveedoresController::class,'create'])->name('proveedor.create');
Route::post('/proveedores/guardar',[ProveedoresController::class,'guardar'])->name('proveedor.guardar');