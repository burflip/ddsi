@extends("create")

@section("title")
    Editando proyecto #{{ $proyecto->id }}
@endsection

@section("resource_title")
    Editando proyecto #{{ $proyecto->id }} - {{ $proyecto->name }}
@endsection

@section("form")
    {!! Form::model($proyecto, ["method" => "post", "route" => "proyecto.store"]) !!}
    @include("proyectos._model")
    {!! Form::close() !!}
    @include("proyectos._destroy")
@endsection

@section("scripts")
    @parent
    <script>
        $('.datepicker').pickadate();
    </script>
@endsection