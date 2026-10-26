@extends('layouts.app')

@section('title', 'Editar paquete')

@section('content')
    <h1 class="h2 mb-3">Editar paquete</h1>
    <div class="card card-body">
        <form method="POST" action="{{ route('paquetes.update', $paquete) }}">
            @csrf
            @method('PUT')
            @include('paquetes._form')
        </form>
    </div>
@endsection
