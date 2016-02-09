@extends("create")

@section("title")
    Editando cliente #{{ $cliente->id }}
@endsection

@section("resource_title")
    Editando cliente #{{ $cliente->id }} - {{ $cliente->name }}
@endsection

@section("form")
    {!! Form::model($cliente, ["method" => "post", "route" => "cliente.store"]) !!}
    @include("clientes._model")
    {!! Form::close() !!}
    @include("clientes._destroy")
@endsection

@section("scripts")
    @parent
    <script>
        $('.datepicker').pickadate();
    </script>
@endsection