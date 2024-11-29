@extends('layouts.app')

@section('content')
    <h1>Plantas</h1>
    <p><strong>Nombre:</strong> {{ $plantas->nombre }}</p>
    <p><strong>Tipo:</strong> {{ $plantas->tipo }}</p>
    <p><strong>Fecha de ingreso:</strong> {{ $plantas->fecha_ingreso }}</p>
    <p><strong>Importe:</strong> {{ $plantas->importe }}</p>
    <p><strong>Activo:</strong> {{ $plantas->activo ? 'Sí' : 'No' }}</p>
    <p><strong>Email:</strong> {{ $plantas->email }}</p>
    <p><strong>Producto:</strong> {{ $planta->productos->nombre }}</p>
    <a href="{{ route('plantas.index') }}" class="btn btn-primary">Volver</a>
@endsection