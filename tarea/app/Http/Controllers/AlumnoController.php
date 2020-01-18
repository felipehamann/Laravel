<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Alumno;
use App\Universidad;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $alumnos = Alumno::all();
        return view('alumno.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = Universidad::all();
        $carreras = Carrera::all();
        return view('alumno.create',compact('carreras','universidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $alumno = new Alumno();
        $alumno->id = $request->id;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->carrera = $request->carrera;
        $alumno->universidad = $request->universidad;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->imagen = $request->imagen->store('public/alumnos');
        $alumno->save();
        return redirect(route('alumnos.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumno.show',compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        $universidades = Universidad::all();
        $carreras = Carrera::all();
        return view('alumno.edit',compact('alumno','carreras','universidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {

        
        //edit datos
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->carrera = $request->carrera;
        $alumno->universidad = $request->universidad;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        //guardado cambios
        $alumno->save();

        return redirect()->route('alumnos.show',$alumno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
