@extends('layouts.app')

@section('title', 'Destinos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h2 mb-0">Destinos</h1>
        <a class="btn btn-primary" href="{{ route('destinos.create') }}">Nuevo destino</a>
    </div>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead><tr><th>Nombre</th><th>País</th><th>Clima</th><th class="text-end">Acciones</th></tr></thead>
                <tbody>
                    @forelse ($destinos as $destino)
                        <tr>
                            <td>{{ $destino->nombre }}</td>
                            <td>{{ $destino->pais }}</td>
                            <td>{{ $destino->clima }}</td>
                            <td class="text-end">
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('destinos.edit', $destino) }}">Editar</a>
                                <form class="d-inline" method="POST" action="{{ route('destinos.destroy', $destino) }}" onsubmit="return confirm('¿Eliminar este destino y sus paquetes asociados?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-center py-4">Aún no hay destinos registrados.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
