@extends('index')

@section('title')
    Lista de clientes
@endsection

@section('elem_title')
    Clientes
@endsection

@section('elem_description')
    Estos son todos los clientes, ¿quieres crear un <a href="{!! route('clientes.create') !!}">nuevo cliente</a>?
@endsection

@section('search')
    @include('_search', ['search_route' => 'clientes.search', 'searchbox_text' => 'Buscar un cliente...'])
@endsection

@section('table')
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>NIF</th>
        <th>Tipo de cliente</th>
        <th>Fecha</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellidos }}</td>
            <td>{{ $cliente->nif }}</td>
            <td>{{ $cliente->tipo_cliente }}</td>
            <td>{{ $cliente->created_at }}</td>
            <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('clientes.show', ['id' => $cliente->id]) }}"><i class="material-icons">visibility</i></a></td>
        </tr>
    @endforeach
    </tbody>
@endsection

@section('pagination')
    {!! $clientes->appends(Request::only('search'))->render() !!}
@endsection