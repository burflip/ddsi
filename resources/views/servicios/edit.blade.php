@extends("create")

@section("title")
    Editando servicio #{{ $servicio->id }}
@endsection

@section("resource_title")
    Editando servicio #{{ $servicio->id }} - {{ $servicio->name }}
@endsection

@section("form")
    {!! Form::model($servicio, ["method" => "post", "route" => "servicio.store"]) !!}
    @include("servicios._model")
    {!! Form::close() !!}
    @include("servicios._destroy")
@endsection

@section("scripts")
    @parent
    <script>
        $('.datepicker').pickadate();
    </script>
@endsection