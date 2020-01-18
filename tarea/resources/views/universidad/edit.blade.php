@extends('layout.master')

@section('main')
    <h3>Editar Carrera</h3>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('universidades.update',$universidad->id) }}" >
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id">id</label>
                    <input type="text" id="id" name="id" class="form-control" value="{{ $universidad->id }}">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $universidad->nombre_universidad }}">
                </div>

                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" value="{{ $universidad->direccion }}">
                </div>

                <div class="form-group">
                    <label for="fono">Fono</label>
                    <input type="text" id="fono" name="fono" class="form-control" value="{{ $universidad->fono }}">
                </div>

                <div class="form-group">
                    <a href="{{ route('universidades.index') }}" class="btn btn-warning">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Editar Universidad</button>
                </div>


            </form>
        </div>
    </div>
@endsection