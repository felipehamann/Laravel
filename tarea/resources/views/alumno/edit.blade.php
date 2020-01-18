@extends('layout.master')


@section('main')

    <h3>Editar Alumno</h3>   
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('alumnos.update',$alumno->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id">id</label>
                        <input type="text" id="id" name="id" class="form-control" value="{{ $alumno->id }}">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $alumno->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" value="{{ $alumno->apellido }}">
                    </div>
                    <div class="form-group">
                        <label for="carrera">Carrera</label>
                        <select class="form-control" id="carrera" name="carrera" >
                            @foreach($carreras as $carrera)
                                <option>{{ $carrera->nombre_carrera }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="universidad">Universidad</label>
                        <select class="form-control" id="universidad" name="universidad" >
                            @foreach($universidades as $universidad)
                                <option>{{ $universidad->nombre_universidad }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{ $alumno->fecha_nacimiento }}">
                    </div>
                    <div class="form-group">
                        <a href="{{ route('alumnos.show',$alumno->id) }}" class="btn btn-warning">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Editar Alumno</button>
                    </div>
                </form>
            </div>
        </div>



@endsection