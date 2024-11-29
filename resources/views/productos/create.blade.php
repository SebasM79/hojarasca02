@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar Producto</button>
    </form>
@endsection