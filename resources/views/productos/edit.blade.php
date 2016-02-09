@extends("create")

@section("title")
    Editando producto #{{ $producto->id }}
@endsection

@section("resource_title")
    Editando producto #{{ $producto->id }} - {{ $producto->name }}
@endsection

@section("form")
    {!! Form::model($producto, ["method" => "post", "route" => "producto.store"]) !!}
    @include("productos._model")
    {!! Form::close() !!}
    @include("productos._destroy")
@endsection