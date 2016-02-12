<div class="row">
    <!-- Name field -->
    <div class="input-field col s12 m6">
        {!! Form::text("name", null, ["id" => "name","class" => "validate"]) !!}
        {!! Form::label("name", "Nombre del impuesto:*") !!}
    </div>

    <!-- Aplicable to all field -->
    <div class="input-field col s12 m6">
        {!! Form::number("aplicable_to_all", null, ["id" => "aplicable_to_all","class" => "validate"]) !!}
        {!! Form::label("aplicable_to_all", "Aplicable a todos los productos y servicios:*") !!}
    </div>

    <!-- Percentage field -->
    <div class="input-field col s12">
        {!! Form::number("percentage", null, ["id" => "percentage","class" => "materialize-textarea"]) !!}
        {!! Form::label("percentage", "Porcentaje de descuento:*") !!}
    </div>

    <!-- Fixed amount field -->
    <div class="input-field col s12 m6">
        {!! Form::text("fixed_amount", null, ["id" => "fixed_amount","class" => "validate"]) !!}
        {!! Form::label("fixed_amount", "Cantidad fija:*") !!}
    </div>
    
    <div class="col s12">
        {!! Form::button("Guardar", ["type" => "submit", "class" => "btn waves-effect waves-light right indigo"]) !!}
    </div>

    <div class="col s12">
        <div class="clearfix"></div>
    </div>
</div>