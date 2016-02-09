@extends("show")

@section("resource_title")
    Servicio #{{ $usuario->id }} - {{ $usuario->name }}
@endsection

@section("data")
    <div class="row">
        <div class="col s12 m6">
            <p><strong>Creado el:</strong> {{ $usuario->created_at }}</p>
            <p><strong>Última modificación:</strong> {{ $usuario->updated_at }}</p>
            <p><strong>Tiempo de desarrollo:</strong> {{ $usuario->development_time }}</p>
            <p><strong>Estado:</strong> {{ $usuario->status }}</p>
        </div>
        <div class="col m6">
            <p><strong>ID del usuario que lo creó:</strong> {{ $usuario->user_id }}</p>
            <p><strong>Email del usuario que lo creó:</strong> {{ $usuario->user->email }}</p>
            <p><strong>ID del usuario de su última modificación:</strong> {{ $usuario->last_update_user_id }}</p>
            <p><strong>Email del usuario de su última modificación:</strong> {{ $usuario->last_update_user->email }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6">
            <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
            <p><strong>Precio:</strong> {{ $usuario->price }}</p>
            <p><strong>URL de imagen:</strong> {{ $usuario->img_url }}</p>
            <p><strong>Descripción:</strong> {{ $usuario->description }}</p>
        </div>
        <div class="col s12 m6">
            <p><strong>Inicio del usuario:</strong> {{ $usuario->starting_date }}</p>
            <p><strong>Fin del usuario:</strong> {{ $usuario->ending_date }}</p>
            <p><strong>Período de facturación en días:</strong> {{ $usuario->invoice_period }}</p>
        </div>
    </div>
@endsection