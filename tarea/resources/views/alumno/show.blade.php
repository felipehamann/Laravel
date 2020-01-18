@extends('layout.master')

@section('main')
    <h3 class="text-center">Informacion Alumno</h3>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 mx-auto">
            <div class="card">
            <img src="{{ Storage::url($alumno->imagen) }}" class="card-img-top" alt="">
                <div class="card-body bg-success">
                    <h5 class="card-title"> Nombre: {{ $alumno->nombre }} {{ $alumno->apellido }}</h5>
                    <p class="card-text"> Carrera: {{ $alumno->carrera }} </p>
                    <p class="card-text"> universidad: {{ $alumno->universidad }} </p>
                    <p class="card-text"> Fecha de nacimiento: {{ date('d-m-Y',strtotime($alumno->fecha_nacimiento)) }} </p>
                    <div>
                        {{-- <form method="POST" action="{{ route('alumnos.destroy', $alumno->id) }}">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('alumnos.index') }}" class="card-link">Volver</a>
                            <button type="submit" class="btn btn-danger">Borrar Alumno</button>

                        </form> --}}
                        <a href="{{ route('alumnos.index') }}" style="color:white" class="btn btn-secondary">Volver</a>
                        <a href="{{ route('alumnos.edit',$alumno->id) }}" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#borrarAlumnoModal">Borrar </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="borrarAlumnoModal" tabindex="-1" role="dialog" aria-labelledby="borrarAlumnoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="borrarAlumnoModalLabel">Confirmar Borrado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ¿Desea borrar al alumno {{ $alumno->nombre }} {{ $alumno->apellido }}?
                </div>
                <div class="modal-footer">

                    <form method="POST" action="{{ route('alumnos.destroy', $alumno->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                        <button type="submit" class="btn btn-danger">Borrar Alumno</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>

@endsection