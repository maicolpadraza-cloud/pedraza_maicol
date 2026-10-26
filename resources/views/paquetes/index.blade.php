@extends('adminlte::page')

@section('title', 'Paquetes')

@section('content_header')
    <h1>Paquetes</h1>
@stop

@section('content')
    @include('layouts.app')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Listado de paquetes</h3>
            <a class="btn btn-primary" href="{{ route('paquetes.create') }}">Crear nuevo</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <thead>
                    <tr><th>No</th><th>Nombre</th><th>Destino</th><th>Días</th><th>Precio</th><th class="text-end">Acciones</th></tr>
                </thead>
                <tbody>
                    @forelse ($paquetes as $paquete)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $paquete->nombre }}</td>
                            <td>{{ $paquete->destino->nombre }}</td>
                            <td>{{ $paquete->dias }}</td>
                            <td>${{ number_format((float) $paquete->precio, 2) }}</td>
                            <td class="text-end">
                                <a class="btn btn-sm btn-success" href="{{ route('paquetes.edit', $paquete) }}">Editar</a>
                                <form class="d-inline" method="POST" action="{{ route('paquetes.destroy', $paquete) }}" onsubmit="return confirm('¿Eliminar este paquete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="text-center py-4">Aún no hay paquetes registrados.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
