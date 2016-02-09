@extends('index')

@section('title')
    Lista de productos
@endsection

@section('elem_title')
    Productos
@endsection

@section('elem_description')
    @if(isset($_GET["search"]))
        Estos son todos los productos que coinciden con tu búsqueda. ¿quieres crear un <a href="{!! route('producto.create') !!}">nuevo producto</a>?
    @else
        Estos son todos los productos, ¿quieres crear un <a href="{!! route('producto.create') !!}">nuevo producto</a>?
    @endif

@endsection

@section('search')
    @include('_search', ['search_route' => 'producto.search', 'searchbox_text' => 'Buscar un producto...'])
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