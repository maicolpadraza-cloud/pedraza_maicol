@extends('layouts.app')

@section('title', 'Nuevo paquete')

@section('content')
    <h1 class="h2 mb-3">Nuevo paquete</h1>
    <div class="card card-body">
        <form method="POST" action="{{ route('paquetes.store') }}">
            @csrf
            @include('paquetes._form')
        </form>
    </div>
@endsection
