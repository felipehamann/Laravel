@extends('layout.master')


@section('main')

    <h3>Universidades</h3>
    <a href= "{{ route('alumnos.index') }}" class="btn btn-primary"> Ver Alumnos</a>
    <a href= "{{ route('carreras.index') }}" class="btn btn-primary"> Ver Carreras</a>

    <div class="row">
        <div class="col text-right">
            <a href= "{{ route('universidades.create') }}"  class="btn btn-success">Agregar universidad</a>

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
                            <th>Direccion</th>
                            <th>Fono</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($universidades as $universidad)
                            <tr>
                                <td>{{ $universidad->id }}</td>
                                <td>{{ $universidad->nombre_universidad }}</td>
                                <td>{{ $universidad->direccion }}</td>
                                <td>{{ $universidad->fono }}</td>

                                <td>
                                    <a href="{{ route('universidades.edit',$universidad->id) }}" class="btn btn-info">Editar</a>
                                </td>

                                <td>
                                    <form method="POST" action="{{ route('universidades.destroy',$universidad->id) }}" >
                                        
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="if(confirm('¿Deseas borrar la Universidad?')){}else{return false;};" class="btn btn-danger">Borrar</button>                                 
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