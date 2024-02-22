{{-- resources/views/chollos/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear un Nuevo Chollo</h1>
    <form action="{{ route('chollos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <!-- Repite para cada campo requerido -->
        <button type="submit" class="btn btn-primary">Crear Chollo</button>
    </form>
</div>
@endsection
