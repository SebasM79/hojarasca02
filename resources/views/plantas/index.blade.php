@extends('layouts.app')

@section('content')
    <h1>Plantas</h1>
    <a href="{{ route('plantas.create') }}" class="btn btn-primary mb-3">Crear Planta</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Fecha de Ingreso</th>
                <th>Importe</th>
                <th>Activo</th>
                <th>Email</th>
                <th>Producto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($plantas as $planta)
                <tr>
                    <td>{{ $planta->nombre }}</td>
                    <td>{{ $planta->tipo }}</td>
                    <td>{{ $planta->fecha_ingreso }}</td>
                    <td>${{ number_format($planta->importe, 2) }}</td>
                    <td>{{ $planta->activo ? 'Sí' : 'No' }}</td>
                    <td>{{ $planta->email }}</td>
                    <td>{{ $planta->producto ? $planta->producto->nombre : 'Sin producto asignado' }}</td>
                    <td>
                        <a href="{{ route('plantas.show', $planta) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('plantas.edit', $planta) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('plantas.destroy', $planta) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Estás seguro de eliminar esta planta?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No hay plantas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $plantas->links() }}
@endsection
