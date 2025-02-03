
@extends('partials.header')
@section('titulo', 'Detalles de la Fruta')

@section('contenido')
<div class="container flex justify-center flex-column" id="main">
    <h2 class="text-uppercase fw-bold text-primary mb-4 text-center">Detalles de la Fruta</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title fw-bold">{{ $fruta->nombre }}</h5>
            <p><span class="fw-bold">ID:</span> {{ $fruta->id }}</p>
            <p><span class="fw-bold">Temporada:</span> {{ $fruta->temporada }}</p>
            <p><span class="fw-bold">Precio:</span> {{ $fruta->precio }} €</p>
            <p><span class="fw-bold">Stock:</span> {{ $fruta->stock }} unidades</p>
            <div class="text-center my-3">
                <img src="{{ $fruta->imagen }}" alt="{{ $fruta->nombre }}" class="img-thumbnail" style="max-width: 300px;">
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('index') }}" class="btn btn-outline-primary rounded-pill">Volver</a>
            <a href="{{ route('fruteria.edit', $fruta->id) }}" class="btn btn-warning rounded-pill">Editar</a>
        </div>
    </div>
</div>
@endsection
