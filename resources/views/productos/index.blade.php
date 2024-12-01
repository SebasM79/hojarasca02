
@extends('layouts.app')

@section('content')
    <h1>Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-2">Crear Producto</a>
    <table class="table table-striped table-hover">

        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>
                        <a href="{{ route('productos.show', $producto) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar</a>
                        <!-- <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
<div class="d-flex justify-content-center">
    {{ $productos->links() }}
</div>