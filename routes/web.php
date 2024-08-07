<?php

use App\Http\Controllers\PuertaController;
use App\Http\Controllers\EstructuraController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\SeccionController;
use App\Models\Contenido;
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

Route::prefix('cms')->group(function () {

    Route::get('/', function () {
        $mostrar = Contenido::find(1);
        return view('inicio', compact('mostrar'));
    });
    Route::get('ver/{cual?}',function ($cual){
        $mostrar = Contenido::find($cual);
    //    dd($mostrar->titulo);
        return view('inicio', compact('mostrar'));
    
    })->name('ver');
    
    
    Route::get('estructuras/{cual?}',[EstructuraController::class, 'lisatar']);
    Route::resource('contenidos',ContenidoController::class);
    Route::resource('secciones',SeccionController::class);
    
    Route::get('cms/', function () {
        return view('Puerta.login');
    });
    
    Route::post('validar',[PuertaController::class,'validar'])->name('validar');

});

