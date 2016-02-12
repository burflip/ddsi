<div class="row">

    <div class="col s12">
        <h3>Datos de cliente:</h3>
    </div>

    <!-- Proyect field -->
    <div class="input-field col s12 m6">
        {!! Form::text("proyecto_id", null, ["id" => "proyecto_id","class" => "validate"]) !!}
        {!! Form::label("proyecto_id", "Asociar a ID de proyecto:") !!}
    </div>

    <!-- Client field -->
    <div class="input-field col s12 m6">
        {!! Form::text("cliente_id", null, ["id" => "cliente_id","class" => "validate"]) !!}
        {!! Form::label("cliente_id", "Asociar a ID de cliente (dejar en blanco si asociada a proyecto):") !!}
    </div>

    <!-- Aceptation field -->
    <div class="input-field col s12 m6">
        {!! Form::text("aceptation_days", null, ["id" => "aceptation_days","class" => "validate"]) !!}
        {!! Form::label("aceptation_days", "Días para aceptación:") !!}
    </div>

    <!-- Percentage field -->
    <div class="input-field col s12 m6">
        {!! Form::text("percentage_discount", null, ["id" => "percentage_discount","class" => "validate"]) !!}
        {!! Form::label("percentage_discount", "Descuento en porcentaje:") !!}
    </div>

    <!-- Amount discount field -->
    <div class="input-field col s12 m6">
        {!! Form::text("amount_discount", null, ["id" => "amount_discount","class" => "validate"]) !!}
        {!! Form::label("amount_discount", "Descuento sobre el total:") !!}
    </div>

    <!-- Notas field -->
    <div class="input-field col s12 m6">
        {!! Form::text("notes", null, ["id" => "notes","class" => "validate"]) !!}
        {!! Form::label("notes", "Notas:") !!}
    </div>

    <div class="col s12">
        <h3>Datos del presupuesto:</h3>
    </div>

    <div class="col s12">
        <h4>Emisor</h4>
    </div>
    @include("presupuestos._invoicing_data",["prefix" => "e_"])
    <div class="col s12">
        <h4>Receptor</h4>
    </div>
    @include("presupuestos._invoicing_data",["prefix" => "r_"])


    <div class="col s12">
        {!! Form::button("Guardar", ["type" => "submit", "class" => "btn waves-effect waves-light right indigo"]) !!}
    </div>

    <div class="col s12">
        <div class="clearfix"></div>
    </div>
</div>
