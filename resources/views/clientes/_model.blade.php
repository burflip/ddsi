<div class="row">

    <div class="col s12">
        <h3>Datos de cliente:</h3>
    </div>
    
    <!-- Name field -->
    <div class="input-field col s12 m6">
        {!! Form::text("name", null, ["id" => "name","class" => "validate"]) !!}
        {!! Form::label("name", "Nombre o razón social:*") !!}
    </div>

    <!-- Surname field -->
    <div class="input-field col s12 m6">
        {!! Form::text("surname", null, ["id" => "surname","class" => "validate"]) !!}
        {!! Form::label("surname", "Apellidos o tipo de sociedad:") !!}
    </div>

    <!-- nif field -->
    <div class="input-field col s12 m6">
        {!! Form::text("nif", null, ["id" => "nif","class" => "validate"]) !!}
        {!! Form::label("nif", "NIF:*") !!}
    </div>

    <!-- Type field -->
    <div class="input-field col s12 m6">
        {!! Form::text("type", null, ["id" => "type","class" => "validate"]) !!}
        {!! Form::label("type", "Tipo de cliente:") !!}
    </div>

    <!-- Phone field -->
    <div class="input-field col s12 m6">
        {!! Form::text("phone", null, ["id" => "phone","class" => "validate"]) !!}
        {!! Form::label("phone", "Teléfono:") !!}
    </div>
    <!-- Mobile field -->
    <div class="input-field col s12 m6">
        {!! Form::text("mobile", null, ["id" => "mobile","class" => "validate"]) !!}
        {!! Form::label("mobile", "Móvil:") !!}
    </div>

    <!-- Email field -->
    <div class="input-field col s12 m6">
        {!! Form::text("email", null, ["id" => "email","class" => "validate"]) !!}
        {!! Form::label("email", "Email:") !!}
    </div>

    <!-- Notas field -->
    <div class="input-field col s12 m6">
        {!! Form::text("notes", null, ["id" => "notes","class" => "validate"]) !!}
        {!! Form::label("notes", "Notas:") !!}
    </div>

    <div class="col s12">
        <h3>Datos de facturación:</h3>
    </div>

    <!-- Nombre para facturación field -->
    <div class="input-field col s12 m6">
        {!! Form::text("invoicing_name", null, ["id" => "invoicing_name","class" => "validate"]) !!}
        {!! Form::label("invoicing_name", "Nombre completo:") !!}
    </div>

    <!-- Type field -->
    <div class="input-field col s12 m6">
        {!! Form::text("entity_type", null, ["id" => "entity_type","class" => "validate"]) !!}
        {!! Form::label("entity_type", "Tipo de entidad:") !!}
    </div>

    <div class="col s12 m6">
        <div class="col s12">
            <p>País:</p>
        </div>
        <div class="col s12 input-field">
            {!! Form::select("country", App\Cliente::$countries, null, ["id" => "country", "class" => "browser-default"]) !!}
        </div>
    </div>

    <div class="col s12 m6">
        <div class="col s12">
            <p>Provincia:</p>
        </div>
        <div class="col s12 input-field">
            {!! Form::select("province", App\Cliente::$provinces, null, ["id" => "province", "class" => "browser-default"]) !!}
        </div>
    </div>

    <!-- City field -->
    <div class="input-field col s12 m6">
        {!! Form::text("city", null, ["id" => "city","class" => "validate"]) !!}
        {!! Form::label("city", "Ciudad:") !!}
    </div>

    <!-- Zip code field -->
    <div class="input-field col s12 m6">
        {!! Form::text("zip_code", null, ["id" => "zip_code","class" => "validate"]) !!}
        {!! Form::label("zip_code", "Código postal:") !!}
    </div>

    <!-- Dirección 1 field -->
    <div class="input-field col s12">
        {!! Form::text("address_1", null, ["id" => "address_1","class" => "validate"]) !!}
        {!! Form::label("address_1", "Dirección línea 1:") !!}
    </div>

    <!-- Dirección 2 field -->
    <div class="input-field col s12">
        {!! Form::text("address_2", null, ["id" => "address_2","class" => "validate"]) !!}
        {!! Form::label("address_2", "Dirección línea 2:") !!}
    </div>

    <div class="col s12">
        {!! Form::button("Guardar", ["type" => "submit", "class" => "btn waves-effect waves-light right indigo"]) !!}
    </div>

    <div class="col s12">
        <div class="clearfix"></div>
    </div>
</div>
