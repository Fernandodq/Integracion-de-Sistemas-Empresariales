<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/clientes', [ClientesController::class, 'getAll']);
Route::get('/v1/clientes/{id}', [ClientesController::class, 'getItem']);

Route::post('/v1/clientes', [ClientesController::class, 'save']);

Route::put('/v1/clientes/{id}', [ClientesController::class, 'updateput']);
Route::patch('/v1/clientes/{id}', [ClientesController::class, 'updatepatch']);
Route::delete('/v1/clientes/{id}', [ClientesController::class, 'delete']);