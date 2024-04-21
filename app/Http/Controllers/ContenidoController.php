<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContenidoRequest;
use App\Http\Requests\UpdateContenidoRequest;
use App\Models\Contenido;

class ContenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contenido =
[    
    "id" => null,
    "titulo" => "Titulo x",
    "creacion" => "2020-02-02",
    "vigor" => "2020-03-03",
    "texto" => "ULTIMAS NOTICIAS",
    "created_at" => "2024-03-06T04:29:51.000000Z",
    "updated_at" => "2024-03-06T04:29:51.000000Z"
];

        return response()->json($contenido);
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
    public function store(StoreContenidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contenido $contenido)
    {
        return response()->json($contenido);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contenido $contenido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContenidoRequest $request, Contenido $contenido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contenido $contenido)
    {
        //
    }
}
