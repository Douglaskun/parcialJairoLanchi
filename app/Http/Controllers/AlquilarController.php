<?php

namespace App\Http\Controllers;

use App\Models\Alquilar;
use App\Http\Requests\StoreAlquilarRequest;
use App\Http\Requests\UpdateAlquilarRequest;

class AlquilarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlquilarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlquilarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alquilar  $alquilar
     * @return \Illuminate\Http\Response
     */
    public function show(Alquilar $alquilar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alquilar  $alquilar
     * @return \Illuminate\Http\Response
     */
    public function edit(Alquilar $alquilar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlquilarRequest  $request
     * @param  \App\Models\Alquilar  $alquilar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlquilarRequest $request, Alquilar $alquilar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alquilar  $alquilar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alquilar $alquilar)
    {
        //
    }
}
