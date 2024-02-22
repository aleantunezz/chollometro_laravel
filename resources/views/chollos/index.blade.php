{{-- resources/views/chollos/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chollos Disponibles</h1>
    <a href="{{ route('chollos.create') }}" class="btn btn-primary">Agregar Chollo</a>
    <div class="mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Precio Descuento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chollos as $chollo)
                <tr>
                    <td>{{ $chollo->id }}</td>
                    <td>{{ $chollo->titulo }}</td>
                    <td>{{ $chollo->categoria }}</td>
                    <td>{{ $chollo->precio }}</td>
                    <td>{{ $chollo->precio_descuento }}</td>
                    <td>
                        <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
