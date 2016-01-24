@extends('index')

@section('title')
    Lista de presupuestos
@endsection

@section('elem_title')
    Presupuestos
@endsection

@section('elem_description')
    Estos son todos los presupuestos, ¿quieres crear un <a href="{!! route('presupuesto.create') !!}">nuevo presupuesto</a>?
@endsection

@section('search')
    @include('_search', ['search_route' => 'presupuesto.show', 'searchbox_text' => 'Buscar un presupuesto...'])
@endsection

@section('table')
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre cliente</th>
        <th>Fecha</th>
        <th>Total</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach($presupuestos as $presupuesto)
        <tr>
            <td>{{ $presupuesto->id }}</td>
            <td>{{ $presupuesto->cliente->nombre }}</td>
            <td>{{ $presupuesto->created_at }}</td>
            <td>{{ $presupuesto->fecha }}</td>
            <td><a class="btn-floating btn-large waves-effect waves-light red" href="{{ route('presupuestos.show', ['id' => $presupuesto->id]) }}"><i class="material-icons">visibility</i></a></td>
        </tr>
    @endforeach
    </tbody>
@endsection

{{--@section('pagination')
    {!! $presupuestos->appends(Request::only('search'))->render() !!}
@endsection --}}