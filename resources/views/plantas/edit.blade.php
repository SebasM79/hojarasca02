
@extends('layouts.app')

@section('content')
    <h1>Editar Plantas</h1>
    <form action="{{ route('plantas.update', $planta) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $planta->nombre }}">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" value="{{ $planta->tipo }}">
        </div>
        <div class="form-group">
            <label for="fecha_ ingreso">Fecha de Ingreso</label>
            <input type="date" name="fecha_ ingreso" id="fecha_ ingreso" class="form-control" value="{{ $planta->fecha_ingreso }}">
        </div>
        <div class="form-group">
            <label for="importe">Importe</label>
            <input type="number" name="importe" id="importe" class="form-control" value="{{ $planta->importe}}">
        </div>
        <div class="form-group">
            <label for="activo">Activo</label>
            <select name="activo" id="activo" class="form-control">
                <option value="1" {{ $planta->activo ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ !$planta->activo ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $empleado->email }}">
        </div>
        <div class="form-group">
            <label for="cargo_id">Producto</label>
            <select name="cargo_id" id="cargo_id" class="form-control">
                <option value="">Seleccionar producto</option>
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}" {{ $producto->producto_id == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
@endsection