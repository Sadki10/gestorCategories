@extends('structure.master')
@section('main')
    <h1>Inicia la sessió</h1>
    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Correu electrònic</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contrasenya</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
            <label class="form-check-label" for="rememberMe">Recorda'm</label>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sessió</button>
    </form>
@endsection
