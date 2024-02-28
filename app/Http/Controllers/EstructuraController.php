<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seccion;
use Illuminate\Support\Collection;


class EstructuraController extends Controller
{
    public function menu() {
        // Arreglo para almacenar el resultado final
        $arregloFinal = [];
        $arreglosubs = [];
    
        // Obtener las secciones principales ordenadas
        $seccionesPrincipales = Seccion::whereNull('seccion_id')
//        ->where('visible',1)
        ->orderBy('orden')
        ->get();
    
    
        // Iterar sobre cada sección principal
        $i=0;
        foreach ($seccionesPrincipales as $seccionPrincipal) {
            // Agregar la sección principal al arreglo final
            $arregloFinal[$i]['seccion'] = $seccionPrincipal->toArray();
    
            // Obtener las subsecciones para esta sección principal
            $subsecciones = Seccion::where('seccion_id', $seccionPrincipal->id)
                //->where('visible',1)
                ->orderBy('orden')
                ->get();

//            $arregloFinal[$i]['subsecciones'] = $subsecciones->toArray();
            
            // Agregar las subsecciones al arreglo final

            foreach ($subsecciones as $subseccion) {
                $arregloFinal[$i]['subsecciones'][]=$subseccion->toArray();
  //              $arregloFinal[] = $subseccion->toArray();
            }
        $i++;
        }
    
        // El arreglo final ahora contiene todas las secciones y subsecciones en el orden deseado
    
        return response()->json($arregloFinal);
    }
    public function lisatar($cual = null){

        return response()->json(Seccion::where('seccion_id',$cual)->orderBy('orden')->get());

    }
}
