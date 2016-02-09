@extends("create")

@section("title")
    Editando factura #{{ $factura->id }}
@endsection

@section("resource_title")
    Editando factura #{{ $factura->id }} - {{ $factura->name }}
@endsection

@section("form")
    {!! Form::model($factura, ["method" => "post", "route" => "factura.store"]) !!}
    @include("facturas._model")
    {!! Form::close() !!}
    @include("facturas._destroy")
@endsection

@section("scripts")
    @parent
    <script>
        $('.datepicker').pickadate();
    </script>
@endsection