@extends("show")

@section("title")
    Mostrando a {{ $presupuesto->name }}
@endsection

@section("resource_title")
    Presupuesto #{{ $presupuesto->id }} - {{ $presupuesto->name }}
@endsection

@section("data")
    <div class="row">
        <div class="col s12 m6">
            <p><strong>Creado el:</strong> {{ $presupuesto->created_at }}</p>
            <p><strong>Última modificación:</strong> {{ $presupuesto->updated_at }}</p>
            <p><strong>Nombre:</strong> {{ $presupuesto->name }}</p>
            <p><strong>Apellidos:</strong> {{ $presupuesto->surname }}</p>
            <p><strong>NIF:</strong> {{ $presupuesto->nif }}</p>
        </div>
        <div class="col s12 m6">
            <p><strong>ID del usuario que lo creó:</strong> {{ $presupuesto->user_id }}</p>
            <p><strong>Email del usuario que lo creó:</strong> {{ $presupuesto->user->email }}</p>
            <p><strong>ID del usuario de su última modificación:</strong> {{ $presupuesto->last_update_user_id }}</p>
            <p><strong>Email del usuario de su última modificación:</strong> {{ $presupuesto->last_update_user->email }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6">
            <p><strong>URL de imagen:</strong> {{ $presupuesto->img_url }}</p>
            <p><strong>Tipo de presupuesto:</strong> {{ $presupuesto->type }}</p>
            <p><strong>Teléfono:</strong> {{ $presupuesto->phone }}</p>
            <p><strong>Móvil:</strong> {{ $presupuesto->mobile }}</p>
            <p><strong>Email:</strong> {{ $presupuesto->email }}</p>
            <p><strong>Notas:</strong> {{ $presupuesto->notes }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h3>Datos de presupuesto</h3>
        </div>
        <div class="col s12 m6">
            <p><strong>Nombre de presupuesto:</strong> {{ $presupuesto->invoicing_name }}</p>
            <p><strong>Tipo de entidad:</strong> {{ $presupuesto->entity_type }}</p>
            <p><strong>NIF:</strong> {{ $presupuesto->nif }}</p>
        </div>
        <div class="col s12 m6">
            <p><strong>País:</strong> {{ $presupuesto->country }}</p>
            <p><strong>Provincia:</strong> {{ $presupuesto->state }}</p>
            <p><strong>Ciudad:</strong> {{ $presupuesto->city }}</p>
            <p><strong>Código postal:</strong> {{ $presupuesto->zip_code }}</p>
            <p><strong>Dirección:</strong> {{ $presupuesto->address_1 }}</p>
            <p><strong>Dirección línea 2:</strong> {{ $presupuesto->address_2 }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s3">
            <div class="card indigo darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Clientes:</span>
                </div>
                <div class="card-action indigo lighten-5 blue-text">
                    <div class="row ">
                        <div class="col s6">
                            <a href="#">Cliente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card indigo darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Facturas:</span>
                </div>
                <div class="card-action indigo lighten-5 blue-text">
                    <div class="row ">
                        <div class="col s6">
                            <a href="#">Factura</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s5">
            <div class="card indigo darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Productos y/o servicios:</span>
                </div>
                <div class="card-action indigo lighten-5 blue-text">
                    <div class="row ">
                        <div class="col s6">
                            <a href="#">Presupuesto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection