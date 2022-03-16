<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\BoletaController;
use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class,'index'])->name('admin.index');

Route::resource('/cuentas/clientes', ClienteController::class)->names('cuentas.clientes');
Route::resource('/cuentas/regsitros', CuentaController::class)->names('cuentas.registros');
Route::resource('/cuentas/boletas', BoletaController::class)->names('cuentas.boletas');
Route::resource('/cuentas/producto', ProductoController::class)->names('cuentas.producto');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

