@extends('layout.master')


@section('main')

    <h3>Carreras</h3>
    <a href= "{{ route('alumnos.index') }}" class="btn btn-primary"> Ver Alumnos</a>
    <a href= "{{ route('universidades.index') }}" class="btn btn-primary"> Ver Universidades</a>
    <div class="row">
        <div class="col text-right">
            <a href= "{{ route('carreras.create') }}"  class="btn btn-success">Agregar carrera</a>
            

        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-dark">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carreras as $carrera)
                            <tr>
                                <td>{{ $carrera->id }}</td>
                                <td>{{ $carrera->nombre_carrera }}</td>
                                
     
                                <td>
                                    <a href="{{ route('carreras.edit',$carrera->id) }}" class="btn btn-info">Editar</a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('carreras.destroy',$carrera->id) }}" >
                                                
                                        @csrf
                                        @method('DELETE')        
                                        <button type="submit" onclick="if(confirm('¿Deseas borrar la carrera?')){}else{return false;};" class="btn btn-danger">Borrar</button>                                 
                                    </form>    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection