@extends('adminlte::page')

@section('title', 'Editar paquete')

@section('content_header')
    <h1>Editar paquete</h1>
@stop

@section('content')
    @include('layouts.app')

    <div class="card">
        <div class="card-header"><h3 class="card-title">Datos del paquete</h3></div>
        <div class="card-body">
            <form method="POST" action="{{ route('paquetes.update', $paquete) }}">
                @csrf
                @method('PUT')
                @include('paquetes._form')
            </form>
        </div>
    </div>
@stop
