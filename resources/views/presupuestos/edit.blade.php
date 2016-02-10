@extends("create")

@section("title")
    Editando presupuesto #{{ $presupuesto->id }}
@endsection

@section("resource_title")
    Editando presupuesto #{{ $presupuesto->id }} - {{ $presupuesto->name }}
@endsection

@section("form")
    {!! Form::model($presupuesto, ["method" => "put", "route" => array("presupuesto.update",$presupuesto->id)]) !!}
    @include("presupuestos._model")
    {!! Form::close() !!}
    @include("presupuestos._destroy")
@endsection

@section("scripts")
    @parent
    <script>
        $('.datepicker').pickadate();
    </script>
@endsection