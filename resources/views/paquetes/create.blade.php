@extends('adminlte::page')

@section('title', 'Nuevo paquete')

@section('content_header')
    <h1>Nuevo paquete</h1>
@stop

@section('content')
    @include('layouts.app')

    <div class="card">
        <div class="card-header"><h3 class="card-title">Datos del paquete</h3></div>
        <div class="card-body">
            <form method="POST" action="{{ route('paquetes.store') }}">
                @csrf
                @include('paquetes._form')
            </form>
        </div>
    </div>
@stop
