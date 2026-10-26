@extends('layouts.app')

@section('title', 'Paquetes')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h2 mb-0">Paquetes</h1>
        <a class="btn btn-primary" href="{{ route('paquetes.create') }}">Nuevo paquete</a>
    </div>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead><tr><th>Nombre</th><th>Destino</th><th>Días</th><th>Precio</th><th class="text-end">Acciones</th></tr></thead>
                <tbody>
                    @forelse ($paquetes as $paquete)
                        <tr>
                            <td>{{ $paquete->nombre }}</td>
                            <td>{{ $paquete->destino->nombre }}</td>
                            <td>{{ $paquete->dias }}</td>
                            <td>${{ number_format((float) $paquete->precio, 2) }}</td>
                            <td class="text-end">
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('paquetes.edit', $paquete) }}">Editar</a>
                                <form class="d-inline" method="POST" action="{{ route('paquetes.destroy', $paquete) }}" onsubmit="return confirm('¿Eliminar este paquete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center py-4">Aún no hay paquetes registrados.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
