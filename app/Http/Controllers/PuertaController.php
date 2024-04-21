<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class PuertaController extends Controller
{
    public function validar(Request $request){
        $nombre_de_usuario = $request->input('nombre_de_usuario');
        $encontrado = Usuario
    }

}
