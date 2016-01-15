@extends('index')

@section('title')
    Lista de usuarios
@endsection

@section('elem_title')
    Usuarios
@endsection

@section('elem_description')
    Estos son todos los proyectos, ¿quieres crear un <a href="{!! route('users.create') !!}">nuevo usuario</a>?
@endsection

@section('search')
    @include('_search', ['search_route' => 'users.search', 'searchbox_text' => 'Buscar un proyecto...'])
@endsection

@section('table')
    <thead>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->nombre }}</td>
            <td class="date">{{ $user->created_at }}</td>
            <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('users.show', ['id' => $user->id]) }}"><i class="material-icons">visibility</i></a></td>
        </tr>
    @endforeach
    </tbody>
@endsection

@section('pagination')
    {!! $users->appends(Request::only('search'))->render() !!}
@endsection