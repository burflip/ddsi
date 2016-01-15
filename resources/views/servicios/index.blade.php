@extends('index')

@section('title')
    Lista de servicios
@endsection

@section('elem_title')
    Servicios
@endsection

@section('elem_description')
    Estos son todos los servicios, ¿quieres crear un <a href="{!! route('servicios.create') !!}">nuevo servicio</a>?
@endsection

@section('search')
    @include('_search', ['search_route' => 'servicios.search', 'searchbox_text' => 'Buscar un servicio...'])
@endsection

@section('table')
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>T. Desarrollo</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach($servicios as $servicio)
        <tr>
            <td>{{ $servicio->id }}</td>
            <td>{{ $servicio->nombre }}</td>
            <td>{{ $servicio->descripcion }}</td>
            <td>{{ $servicio->precio }}</td>
            <td>{{ $servicio->tiempo_desarrollo }}</td>
            <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('servicios.show', ['id' => $servicio->id]) }}"><i class="material-icons">visibility</i></a></td>
        </tr>
    @endforeach
    </tbody>
@endsection

@section('pagination')
    {!! $servicios->appends(Request::only('search'))->render() !!}
@endsection