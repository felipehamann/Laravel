@extends('layout.master')


@section('main')

    <h3>Alumnos</h3>
    <a href= "{{ route('carreras.index') }}" class="btn btn-primary"> Ver Carreras</a>
    <a href= "{{ route('universidades.index') }}" class="btn btn-primary"> Ver Universidades</a>
    <div class="row">
        <div class="col text-right">
            <a href= "{{ route('alumnos.create') }}"  class="btn btn-success">Agregar alumno</a>
            

        </div>
    </div>
    
    <div class="row ">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-dark">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Carrera</th>
                            <th>Universidad</th>
                            <th>Fecha de Nacimiento</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->id }}</td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->apellido }}</td>
                                <td>{{ $alumno->carrera }}</td>
                                <td>{{ $alumno->universidad }}</td>
                                <td>{{ $alumno->fecha_nacimiento }}</td>
                                <td>
                                    <a href="{{ route('alumnos.show',$alumno->id) }}" class="btn btn-info">Ver información</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection