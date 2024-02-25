<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeccionRequest;
use App\Http\Requests\UpdateSeccionRequest;
use App\Models\Seccion;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $nueva = new Seccion();
        $nueva->fill($request->all());
        $nueva->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Seccion $seccion)
    {
        return response()->json($seccion);
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
    public function destroy(Seccion $seccion)
    {
        $copia = $seccion;
        $seccion->delete();
        return response()->json("borrado");

    }
}
