@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre Producto</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto ? $producto->nombre : '' }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
    </form>
@endsection