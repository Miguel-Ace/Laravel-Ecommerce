<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CodigoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoProductoController;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::resource('categorias', CategoriaController::class);
Route::resource('codigos', CodigoController::class);
Route::resource('compras', CompraController::class);
Route::resource('facturas', FacturaController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('tipo-productos', TipoProductoController::class);

Route::get('/', 'PaginaController@principal');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
