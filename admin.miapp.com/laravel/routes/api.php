<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ProductosController;
use App\Http\Controllers\v1\CategoriasController;
use App\Http\Controllers\v1\ClientesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/v1/productos',[ProductosController::class,'getAll']);
Route::get('/v1/productos/{id}',[ProductosController::class,'getItem']);
Route::post('/v1/productos',[ProductosController::class,'store']);
Route::put('/v1/productos',[ProductosController::class,'putUpdate']);
Route::patch('/v1/productos',[ProductosController::class,'patchUpdate']);
Route::delete('/v1/productos/{id}',[ProductosController::class,'delete']);

/* rutas para las apis de categorias*/
Route::get('/v1/categorias',[CategoriasController::class,'getAll']);
Route::get('/v1/categorias/{id}',[CategoriasController::class,'getItem']);
Route::post('/v1/categorias',[CategoriasController::class,'store']);
Route::put('/v1/categorias',[CategoriasController::class,'putUpdate']);
Route::patch('/v1/categorias',[CategoriasController::class,'patchUpdate']);
Route::delete('/v1/categorias/{id}',[CategoriasController::class,'delete']);

/* rutas para las apis de clientes*/
Route::get('/v1/clientes',[ClientesController::class,'getAll']);
Route::get('/v1/clientes/{id}',[ClientesController::class,'getItem']);
Route::post('/v1/clientes',[ClientesController::class,'store']);
Route::put('/v1/clientes',[ClientesController::class,'putUpdate']);
Route::patch('/v1/clientes',[ClientesController::class,'patchUpdate']);
Route::delete('/v1/clientes/{id}',[ClientesController::class,'delete']);