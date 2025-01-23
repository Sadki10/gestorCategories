@extends('structure.master')

@section('main')
{{--    <a href="{{ route('createCategory') }}" class="btn btn-outline-success">Crear</a>--}}
    <h2>Categories:</h2>
{{--    @foreach($categories as $category)--}}
{{--        <div>User: {{ $category->user_id }}</div>--}}
{{--        <div>ID: {{ $category->id }}</div>--}}
{{--        <div>categorylang: {{ $category->langs()->first() }}</div>--}}
{{--        {{dump($category->langs()->first())}}--}}
{{--    @endforeach--}}

    <table class="table table-striped align-middle">
        <thead class="thead-dark">
        <tr>
            <th class="align-middle">ID</th>
            <th class="align-middle">Títol</th>
            <th class="align-middle">Usuari</th>
            <th class="align-middle text-end"><a href="{{ route('createCategory') }}" class="btn btn-primary">Afegir</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th>{{ $category->id }}</th>
                <td>{{ $category->langs()->first() ? $category->langs()->first()->title : '' }}</td>
{{--                {{ dump($category->langs()->first()->language()->code) }}--}}
                <td>{{ $category->user->name }}</td>
                <td class='text-end'>
                    <a class='btn btn-success' href="{{ route('showCategory', [$category->id]) }}">Mostrar</a>
                    <a class='btn btn-warning' href="{{ route('editCategory', [$category->id]) }}">Editar</a>
                    <a class='btn btn-danger' href="{{ route('destroyCategory', [$category->id]) }}">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
