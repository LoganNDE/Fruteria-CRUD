@extends('partials.header')
@section('titulo', 'Frutería Naranjo')

@section('contenido')
<div class="container d-flex flex flex-column justify-content-center" id="main">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-uppercase fw-bold text-primary">Frutería Naranjo</h2>
        @if (auth()->check())
            <a href="{{ route('fruteria.create') }}" class="btn btn-outline-primary rounded-pill">Agregar nueva fruta</a>
        @endif
    </div>


    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-primary">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Temporada</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    @if (auth()->check())
                        <th>Acciones</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($frutas as $fruta)
                    <tr class="text-center">
                        <td class="fw-bold">{{ $fruta->id }}</td>
                        <td>{{ $fruta->nombre }}</td>
                        <td>
                            <img src="{{ $fruta->imagen }}" alt="{{ $fruta->nombre }}" class="img-thumbnail" style="width: 70px; height: auto;">
                        </td>
                        <td>
                            <span class="badge bg-success">{{ $fruta->temporada }}</span>
                        </td>
                        <td>{{ number_format($fruta->precio, 2) }} €</td>
                        <td>{{ $fruta->stock }} unidades</td>
                        @if (auth()->check())
                            <td>
                                <a href="{{ route('fruteria.show', $fruta->id) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route ('fruteria.edit',$fruta->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('fruteria.destroy', $fruta->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta fruta?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        @endif
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
