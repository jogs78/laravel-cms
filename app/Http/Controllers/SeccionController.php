<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeccionRequest;
use App\Http\Requests\UpdateSeccionRequest;
use App\Models\Seccion;

use Illuminate\Support\Facades\Log;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Arreglo para almacenar el resultado final
        $arregloFinal = [];
        $arreglosubs = [];
        $sp=[
            'id'=> 1,
            'nombre'=> "Seccion Principal",
            'seccion_id'=> null,
            'contenido_id'=> null,
            'tipo'=> "estructura",
            'orden'=> 0,
            'visible'=> 1,
        ];

        // Obtener las secciones principales ordenadas
        $seccionesPrincipales = Seccion::whereNull('seccion_id')
//        ->where('visible',1)
        ->orderBy('orden')
        ->get();
    
    
        // Agregar la sección principal al arreglo final
        $arregloFinal[0]['seccion'] = $sp;

        // Obtener las subsecciones para esta sección principal
        $subsecciones = Seccion::whereNull('seccion_id')
            //->where('visible',1)
            ->orderBy('orden')
            ->get();

        // Agregar las subsecciones al arreglo final
        foreach ($subsecciones as $subseccion) {
            $arregloFinal[0]['subsecciones'][]=$subseccion->toArray();
        }

        return response()->json($arregloFinal);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSeccionRequest $request)
    {
        $todos = $request->all();
        foreach ($todos as $key => $value) {
            Log::channel('depurar')->info("tiene $key => $value");
        }
        Log::channel('depurar')->info("visible antes => " . $todos['visible']);

        
        if($todos['visible']=='undefined' || $todos['visible']== 'false')
            $todos['visible']=0;

        if($todos['visible'])
            $todos['visible']=1;

        Log::channel('depurar')->info("visible despues => " . $todos['visible']);

        $nueva = new Seccion();
        $nueva->fill($todos);
        $nueva->save();
    }

    /**
     * Display the specified resource.
     */
    public function show( $seccion)
    {
        // Arreglo para almacenar el resultado final
        $arregloFinal = [];
        $arreglosubs = [];
    
        // Obtener las secciones principales ordenadas
        $seccionesPrincipales = Seccion::where('id',$seccion)
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seccion $seccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeccionRequest $request,  $id_seccion)
    {
        $seccion = Seccion::find($id_seccion);
        $seccion->fill($request->all());
        $seccion->save();
        return response()->json($seccion,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $seccion = Seccion::find($id);
        $seccion->delete();
        return response()->json("borrado");

    }
}
