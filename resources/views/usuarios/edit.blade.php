@extends("create")

@section("title")
    Editando usuario #{{ $usuario->id }}
@endsection

@section("resource_title")
    Editando usuario #{{ $usuario->id }} - {{ $usuario->name }}
@endsection

@section("form")
    {!! Form::model($usuario, ["method" => "post", "route" => "usuario.store"]) !!}
    @include("usuarios._model")
    {!! Form::close() !!}
    @include("usuarios._destroy")
@endsection

@section("scripts")
    @parent
    <script>
        $('.datepicker').pickadate();
    </script>
@endsection