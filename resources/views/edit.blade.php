
@extends('partials.header')
@section('titulo', 'Editar Fruta')

@section('contenido')
<div class="container flex justify-center flex-column" id="main">
    <h2 class="text-uppercase fw-bold text-primary mb-4 text-center">Editar Fruta</h2>

    <form action="{{ route('fruteria.update', $fruta->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label fw-bold">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $fruta->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label fw-bold">Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen">
            <small class="text-muted">Deja este campo vacío para mantener la imagen actual.</small>
        </div>
        <div class="mb-3">
            <label for="temporada" class="form-label fw-bold">Temporada</label>
            <input type="text" class="form-control" id="temporada" name="temporada" value="{{ $fruta->temporada }}" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label fw-bold">Precio (€)</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="{{ $fruta->precio }}" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label fw-bold">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $fruta->stock }}" required>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-warning rounded-pill shadow-sm">Actualizar Fruta</button>
        </div>
    </form>
</div>
@endsection
