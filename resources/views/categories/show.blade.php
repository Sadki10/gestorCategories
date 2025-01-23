@extends('structure.master')
@section('main')
    <h2>Mostrar categoria</h2>
        @foreach($languages as $language)
            <div class="card flex-row align-items-center mb-3 gap-2 p-3">
                <div class="fw-bold">{{ $language->code }}</div>
                <div>{{ $categoryLangs[$language->id]->title ?? '' }}</div>
            </div>
        @endforeach
@endsection
