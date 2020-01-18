@extends('layout.master')

@section('main')
    <h3>Agregar Carrera</h3>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('carreras.store') }}" >
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
                    <a href="{{ route('carreras.index') }}" class="btn btn-warning">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Agregar Carrera</button>
                </div>


            </form>
        </div>
    </div>
@endsection