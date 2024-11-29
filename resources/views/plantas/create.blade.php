<!-- resources/views/plantas/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Crear Plantas</h1>
    <form action="{{ route('plantas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha_ingreso">Fecha de Ingreso</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control">
        </div>
        <div class="form-group">
            <label for="importe">Importe</label>
            <input type="number" name="importe" id="importe" class="form-control">
        </div>
        <div class="form-group">
            <label for="activo">Activo</label>
            <select name="activo" id="activo" class="form-control">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="producto_id">Producto</label>
            <select name="producto_id" id="producto_id" class="form-control">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar cambios</button>
    </form>
@endsection