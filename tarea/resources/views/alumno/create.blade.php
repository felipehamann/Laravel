@extends('layout.master')


@section('main')

    <h3>Agregar Alumno</h3>   
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('alumnos.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="id">id</label>
                        <input type="text" id="id" name="id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control">
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
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" id="imagen" name="imagen" class="custom-file-input">
                            <label for="imagen" class="custom-file-label" data-browse="Examinar">Seleccione imagen</label>
                        </div>
                    
                    </div>

                    <div class="form-group">
                        <a href="{{ route('alumnos.index') }}" class="btn btn-warning">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Agregar Alumno</button>
                    </div>
                </form>
            </div>
        </div>



@endsection

@section('scripts')
    <script>
        $('#imagen').on('change',function(){

            var archivo = $(this).val().replace('C:\\fakepath\\','');
            $(this).next('.custom-file-label').html(archivo);                

        })
    
    
    </script>

@endsection
