@extends('index')

@section('title')
    Lista de facturas
@endsection

@section('elem_title')
    Facturas
@endsection

@section('elem_description')
    Estos son todas las facturas, ¿quieres crear una <a href="{!! route('proyectos.create') !!}">nueva factura</a>?
@endsection

@section('search')
    @include('_search', ['search_route' => 'facturas.search', 'searchbox_text' => 'Buscar una factura...'])
@endsection

@section('table')
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach($facturas as $factura)
        <tr>
            <td>{{ $factura->id }}</td>
            <td>{{ $factura->nombre }}</td>
            <td>{{ $factura->fecha }}</td>
            <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('facturas.show', ['id' => $factura->id]) }}"><i class="material-icons">visibility</i></a></td>
        </tr>
    @endforeach
    </tbody>
@endsection

@section('pagination')
    {!! $facturas->appends(Request::only('search'))->render() !!}
@endsection