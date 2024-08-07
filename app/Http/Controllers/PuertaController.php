<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PuertaController extends Controller
{
    public function validar(Request $request){
        $nombre_de_usuario = $request->input('nombre_de_usuario');
        $encontrado = Usuario::where('nombre_de_usuario',$nombre_de_usuario)->first();
        if(is_null($encontrado)){
            echo "no encontado";
        }else{
            $clave_encritpada  = $encontrado->clave;
            $clave_texto_plano = $request->input('clave');
            if(Hash::check($clave_texto_plano,$clave_encritpada)){

                
            }
        }
    }

}
