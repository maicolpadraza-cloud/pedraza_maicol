@extends('layouts.app')

@section('title', 'Editar destino')

@section('content')
    <h1 class="h2 mb-3">Editar destino</h1>
    <div class="card card-body">
        <form method="POST" action="{{ route('destinos.update', $destino) }}">
            @csrf
            @method('PUT')
            @include('destinos._form')
        </form>
    </div>
@endsection
