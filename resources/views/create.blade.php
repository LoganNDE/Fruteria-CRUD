
@extends('partials.header')
@section('titulo', 'Agregar Fruta')

@section('contenido')
<div class="container flex justify-center flex-column" id="main">
    <h2 class="text-uppercase fw-bold text-primary mb-4 text-center">Agregar Nueva Fruta</h2>

    <form action="{{ route('fruteria.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label fw-bold">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la fruta" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label fw-bold">Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen">
        </div>
        <div class="mb-3">
            <label for="temporada" class="form-label fw-bold">Temporada</label>
            <input type="text" class="form-control" id="temporada" name="temporada" placeholder="Ej. Primavera, Verano" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label fw-bold">Precio (€)</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" placeholder="Precio en euros" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label fw-bold">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Cantidad disponible" required>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success rounded-pill shadow-sm">Guardar Fruta</button>
        </div>
    </form>
</div>
@endsection
