{{-- resources/views/chollos/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Chollo</h1>
    <form action="{{ route('chollos.update', $chollo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $chollo->titulo }}" required>
        </div>
        <!-- Repite para cada campo con la información previa del chollo -->
        <button type="submit" class="btn btn-success">Actualizar Chollo</button>
    </form>
</div>
@endsection
