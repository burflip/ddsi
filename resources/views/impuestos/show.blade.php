@extends("show")

@section("resource_title")
    Impuesto #{{ $impuesto->id }} - {{ $impuesto->name }}
@endsection

@section("data")
    <div class="row">
        <div class="col s12 m6">
            <p><strong>Creado el:</strong> {{ $impuesto->created_at }}</p>
            <p><strong>Última modificación:</strong> {{ $impuesto->updated_at }}</p>
            <p><strong>Fecha de inicio del impuesto:</strong> {{ $impuesto->starting_date }}</p>
            <p><strong>Fecha de finalización del impuesto:</strong> {{ $impuesto->ending_date }}</p>
        </div>
        <div class="col m6">
            <p><strong>ID del usuario que lo creó:</strong> {{ $impuesto->user_id }}</p>
            <p><strong>Email del usuario que lo creó:</strong> {{ $impuesto->user->email }}</p>
            <p><strong>ID del usuario de su última modificación:</strong> {{ $impuesto->last_update_user_id }}</p>
            <p><strong>Email del usuario de su última modificación:</strong> {{ $impuesto->last_update_user->email }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <p><strong>Nombre:</strong> {{ $impuesto->name }}</p>
            <p><strong>Aplicable a todos los productos y servicios:</strong> {{ $impuesto->aplicable_to_all }}</p>
            <p><strong>Porcentaje de descuento:</strong> {{ $impuesto->percentage }}</p>
            <p><strong>Cantidad fija:</strong> {{ $impuesto->fixed_amount }}</p>
        </div>
    </div>
@endsection