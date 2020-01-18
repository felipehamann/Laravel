@extends('layout.master')

@section('main')
    <h3>Agregar Universidad</h3>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('universidades.store') }}" >
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
                    <label for="direccion">Direccion</label>
                    <input type="text" id="direccion" name="direccion" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fono">Fono</label>
                    <input type="text" id="fono" name="fono" class="form-control">
                </div>

                <div class="form-group">
                    <a href="{{ route('universidades.index') }}" class="btn btn-warning">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Agregar Universidad</button>
                </div>


            </form>
        </div>
    </div>
@endsection