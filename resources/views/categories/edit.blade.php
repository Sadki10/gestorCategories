@extends('structure.master')
@section('main')
    <h2>Modificar categoria</h2>
    <form action="{{ route('updateCategory', $category->id) }}" method="post" class="d-flex flex-column text-center">
        @csrf
            @foreach($languages as $language)
                <div class="row mb-3">
                    <label for="{{ $language->code }}" class="col-sm-1 col-form-label">{{ $language->code }}</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="{{ $language->code }}" name="langs[{{ $language->id }}]" value="{{ $categoryLangs[$language->id]->title ?? '' }}">
                    </div>
                </div>
            @endforeach
        <input type="hidden" name="categoryId" value="{{ $category->id }}">
        <button type="submit" class="btn btn-primary col-sm-11">Modificar</button>
    </form>
@endsection
