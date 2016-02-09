<div class="row">
    <!-- Name field -->
    <div class="input-field col s12 m6">
        {!! Form::text("name", null, ["id" => "name","class" => "validate"]) !!}
        {!! Form::label("name", "Nombre del proyecto:*") !!}
    </div>

    <!-- Total amount -->
    <div class="input-field col s12 m6">
        {!! Form::text("total_amount", null, ["id" => "total_amount","class" => "validate"]) !!}
        {!! Form::label("total_amount", "Importe total facturado:") !!}
    </div>

    <!-- Notes field -->
    <div class="input-field col s12">
        {!! Form::textarea("notes", null, ["id" => "notes","class" => "materialize-textarea"]) !!}
        {!! Form::label("notes", "Notas:") !!}
    </div>

    <!-- IMG_URL field -->
    <div class="input-field col s12 m6">
        {!! Form::text("img_url", null, ["id" => "img_url","class" => "validate"]) !!}
        {!! Form::label("img_url", "URL de imagen:") !!}
    </div>

    <!-- Starting date field -->
    <div class="col s12 m6">
        {!! Form::label("starting_date", "Fecha de inicio del proyecto*:") !!}
        {!! Form::date("starting_date", null, ["id" => "starting_date","class" => "datepicker"]) !!}

    </div>

    <!-- Ending date field -->
    <div class="col s12 m6">
        {!! Form::label("ending_date", "Fecha de finalización del proyecto*:") !!}
        {!! Form::date("ending_date", null, ["id" => "ending_date", "class" => "datepicker"]) !!}
    </div>
    
    <div class="col s12">
        {!! Form::button("Guardar", ["type" => "submit", "class" => "btn waves-effect waves-light right indigo"]) !!}
    </div>

    <div class="col s12">
        <div class="clearfix"></div>
    </div>
</div>