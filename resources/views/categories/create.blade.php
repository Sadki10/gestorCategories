@extends('structure.master')
@section('main')
<h2>Crear categoria</h2>
<form action="{{ route('storeCategory') }}" method="post">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" name="title" id="title" placeholder="Títol" required>
        <label for="title" class="form-label">Títol</label>
    </div>
    <div class="form-floating mb-3">
        <select class="form-select" name="languageId" id="language" required>
            @foreach($languages as $language)
                <option value="{{ $language->id }}">{{ $language->code }}</option>
            @endforeach
        </select>
        <label for="language">Idioma</label>
        </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
