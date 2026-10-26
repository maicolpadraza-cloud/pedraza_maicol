@extends('layouts.app')

@section('title', 'Nuevo destino')

@section('content')
    <h1 class="h2 mb-3">Nuevo destino</h1>
    <div class="card card-body">
        <form method="POST" action="{{ route('destinos.store') }}">
            @csrf
            @include('destinos._form')
        </form>
    </div>
@endsection
