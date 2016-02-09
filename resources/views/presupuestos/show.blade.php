@extends("show")

@section("resource_title")
    Presupuesto #{{ $presupuesto->id }} - {{ $presupuesto->name }}
@endsection

@section("data")
    <div class="row">
        <div class="col s12 m6">
            <p><strong>Creado el:</strong> {{ $presupuesto->created_at }}</p>
            <p><strong>Última modificación:</strong> {{ $presupuesto->updated_at }}</p>
            <p><strong>Tiempo de desarrollo:</strong> {{ $presupuesto->development_time }}</p>
            <p><strong>Estado:</strong> {{ $presupuesto->status }}</p>
        </div>
        <div class="col m6">
            <p><strong>ID del usuario que lo creó:</strong> {{ $presupuesto->user_id }}</p>
            <p><strong>Email del usuario que lo creó:</strong> {{ $presupuesto->user->email }}</p>
            <p><strong>ID del usuario de su última modificación:</strong> {{ $presupuesto->last_update_user_id }}</p>
            <p><strong>Email del usuario de su última modificación:</strong> {{ $presupuesto->last_update_user->email }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <p><strong>Nombre:</strong> {{ $presupuesto->name }}</p>
            <p><strong>Precio:</strong> {{ $presupuesto->price }}</p>
            <p><strong>URL de imagen:</strong> {{ $presupuesto->img_url }}</p>
            <p><strong>Descripción:</strong> {{ $presupuesto->description }}</p>
        </div>
    </div>
@endsection