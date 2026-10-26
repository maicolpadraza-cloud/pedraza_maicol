@extends('adminlte::page')

@section('title', 'Editar destino')

@section('content_header')
    <h1>Editar destino</h1>
@stop

@section('content')
    @include('layouts.app')

    <div class="card">
        <div class="card-header"><h3 class="card-title">Datos del destino</h3></div>
        <div class="card-body">
            <form method="POST" action="{{ route('destinos.update', $destino) }}">
                @csrf
                @method('PUT')
                @include('destinos._form')
            </form>
        </div>
    </div>
@stop
