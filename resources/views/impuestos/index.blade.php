@extends('index')

@section('title')
    Lista de impuestos
@endsection

@section('elem_title')
    Impuestos
@endsection

@section('elem_description')
    Estos son todos los impuestos, ¿quieres crear un <a href="{!! route('impuestos.create') !!}">nuevo impuesto</a>?
@endsection

@section('search')
    @include('_search', ['search_route' => 'impuestos.search', 'searchbox_text' => 'Buscar un impuesto...'])
@endsection

<!-- Nombre del campo field -->
<div class="input-field col s12">
    {!! Form::text("nombre", null, ["id" => "nombre","class" => "validate"]) !!}
    {!! Form::label("nombre", "Nombre del campo:") !!}
</div>
@section('table')
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Fecha</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach($impuestos as $impuesto)
        <tr>
            <td>{{ $impuesto->id }}</td>
            <td>{{ $impuesto->nombre }}</td>
            <td>{{ $impuesto->fecha }}</td>
            <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('impuestos.show', ['id' => $impuesto->id]) }}"><i class="material-icons">visibility</i></a></td>
        </tr>
    @endforeach
    </tbody>
@endsection

@section('pagination')
    {!! $impuestos->appends(Request::only('search'))->render() !!}
@endsection