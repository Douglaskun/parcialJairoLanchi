<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Requests\StorePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personas = Persona::all();
        return view("admin.plantillaMostrar", compact("personas"));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personas = Persona::all();
        return view("admin.plantillaCrear", compact("personas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonaRequest $request)
    {
        //
        $datosPersona = request()->except('_token');

        
        Persona::insert($datosPersona);
       // return response()->json($datosEmpleado);
       return redirect()->route("personas.index")->with('mensaje','Cliente Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona=Persona::findOrFail($id);
        return view("admin.plantillaEditar", compact("persona"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonaRequest  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonaRequest $request, Persona $persona)
    {
        //
        $datosPersona = request()->except(['_token','_method']);
        // Cliente::where('id','=', $id)->update($datosCliente);
         $persona->update($datosPersona);
         return redirect()->route("personas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
        $persona->delete();
        return redirect()->route("personas.index");
    }
}
