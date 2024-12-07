<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProveedorController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/categoria',[CategoriaController::class,'indexCategoria'])->name('categoria');
Route::get('/categoria/edit/{id}',[CategoriaController::class,'indexEditCategoria'])->name('editCategoria');
Route::post('/categoria',[CategoriaController::class,'crearCategoria'])->name('crearCategoria');
Route::patch('/categoria/{id}',[CategoriaController::class,'setCategoria'])->name('actualizarCategoria');
Route::delete('/categoria/{id}',[CategoriaController::class,'deleteCategoria'])->name('borrarCategoria');

Route::get('/producto',[ProductoController::class,'indexProducto'])->name('producto');
Route::get('/producto/edit/{id}',[ProductoController::class,'indexEditProducto'])->name('editProducto');
Route::post('/producto',[ProductoController::class,'crearProducto'])->name('crearProducto');
ROute::patch('/producto/{id}',[ProductoController::class,'setProducto'])->name('actualizarProducto');
Route::delete('/producto/{id}',[ProductoController::class,'deleteProducto'])->name('borrarProducto');

Route::get('/proveedor',[ProveedorController::class,'indexProveedor'])->name('proveedor');
Route::get('/proveedor/edit/{id}',[ProveedorController::class,'indexEditProveedor'])->name('editProveedor');
Route::post('/proveedor',[ProveedorController::class,'crearProveedor'])->name('crearProveedor');
ROute::patch('/proveedor/{id}',[ProveedorController::class,'setProveedor'])->name('actualizarProveedor');
Route::delete('/proveedor/{id}',[ProveedorController::class,'deleteProveedor'])->name('borrarProveedor');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
