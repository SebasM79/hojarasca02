@extends('layouts.app')

@section('content')
    <h1>Producto</h1>
    <p><strong>Nombre:</strong> {{ $productos->nombre }}</p>
    <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
@endsection