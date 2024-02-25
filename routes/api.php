<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstructuraController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\SeccionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('menu',[EstructuraController::class, 'menu']);

Route::get('estructuras/{cual?}',[EstructuraController::class, 'lisatar']);


Route::apiResource('contenidos',ContenidoController::class);
Route::apiResource('secciones',SeccionController::class);

