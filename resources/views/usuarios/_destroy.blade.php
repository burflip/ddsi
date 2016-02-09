<div class="row">
    <div class="col s12">
        <h3>Eliminar usuario #{{ $usuario->id }}</h3>
    </div>
    <div class="col s12">
        {!! Form::open(["method" => "delete", "route" => ["usuario.destroy", $usuario->id]]) !!}
        {!! Form::button("Eliminar", ["type" => "submit", "class" => "btn waves-effect waves-light left red"]) !!}
        {!! Form::close() !!}
    </div>
    <div class="col s12">
        <div class="clearfix"></div>
    </div>
</div>
