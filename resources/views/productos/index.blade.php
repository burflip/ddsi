@extends('index')

@section('title')
    Lista de productos
@endsection

@section('elem_title')
    Productos
@endsection

@section('elem_description')
    Estos son todos los productos, ¿quieres crear un <a href="{!! route('productos.create') !!}">nuevo producto</a>?
@endsection

@section('search')
    @include('_search', ['search_route' => 'productos.search', 'searchbox_text' => 'Buscar un producto...'])
@endsection

@section('table')
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('productos.show', ['id' => $producto->id]) }}"><i class="material-icons">visibility</i></a></td>
        </tr>
    @endforeach
    </tbody>
@endsection

@section('pagination')
    {!! $productos->appends(Request::only('search'))->render() !!}
@endsection