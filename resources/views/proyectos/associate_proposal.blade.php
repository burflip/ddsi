@extends("create")

@section("title")
    Asociar un presupuesto al proyecto #{{ $id }}
@endsection

@section("resource_title")
    Asociar un presupuesto al proyecto #{{ $id }}
@endsection

@section("form")
    {!! Form::open(["method" => "post", "route" => ["proyecto.add.proposal", $id]]) !!}
            <!-- ID de la factura field -->
    <div class="input-field col s12">
        {!! Form::text("proposal_id", null, ["id" => "proposal_id","class" => "validate"]) !!}
        {!! Form::label("proposal_id", "ID de la factura:") !!}
    </div>
    <div class="col s12">
        {!! Form::button("Asociar", ["type" => "submit", "class" => "btn waves-effect waves-light"]) !!}
    </div>
    {!! Form::close() !!}
@endsection