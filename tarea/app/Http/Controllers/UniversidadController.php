<?php

namespace App\Http\Controllers;

use App\Universidad;
use App\Alumno;
use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades = Universidad::all();
        return view('universidad.index',compact('universidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('universidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $universidad = new Universidad();
        $universidad->id = $request->id;
        $universidad->nombre_universidad = $request->nombre;
        $universidad->direccion = $request->direccion;
        $universidad->fono= $request->fono;
        $universidad->save();
        return redirect(route('universidades.index')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function show(Universidad $universidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Universidad $universidad)
    {
        return view('universidad.edit',compact('universidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Universidad $universidad)
    {
        $universidad->id = $request->id;
        $universidad->nombre_universidad = $request->nombre;
        $universidad->direccion = $request->direccion;
        $universidad->fono = $request->fono;
        $universidad->save();

        return redirect()->route('universidades.index',$universidad->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Universidad  $universidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universidad $universidad)
    {
        $universidad->delete();
        return redirect()->route('universidades.index');
    }
}
