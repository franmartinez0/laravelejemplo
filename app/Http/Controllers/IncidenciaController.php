<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;


class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $incidencias = Incidencia::all();
       return view('incidencias',['incidencias' => $incidencias]);
        //nombre de la vista------nombre del valor---variable de la plantilla
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formIncidencia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidencia=new Incidencia();
        $incidencia-> latitud = $request->latitud;
        $incidencia-> longitud = $request->longitud;
        $incidencia-> ciudad = $request->ciudad;
        $incidencia-> direccion = $request->direccion;
        $incidencia-> etiqueta = $request->etiqueta;
        $incidencia-> descripcion = $request->descripcion;
        $incidencia-> estado = $request->estado;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incidencia = Incidencia::find($id);
        return view('detalleIncidencia',['incidencia' => $incidencia]);




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
