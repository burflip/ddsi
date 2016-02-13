@extends("show")

@section("title")
    Mostrando a {{ $factura->name }}
@endsection

@section("resource_title")
    Factura #{{ $factura->id }} - {{ $factura->name }}
@endsection

@section("data")
    <div class="row">
        <div class="col s12 m6">
            <p><strong>Creado el:</strong> {{ $factura->created_at }}</p>
            <p><strong>Última modificación:</strong> {{ $factura->updated_at }}</p>
            @if($factura->cliente != null)<p><strong>ID Cliente:</strong><a href="{{ route("clientes.show",["id" => $factura->cliente->id]) }}">{{ $factura->cliente->id }}</a></p>@endif
            <p><strong>Nombre:</strong> {{ $factura->name }}</p>
            <p><strong>Apellidos:</strong> {{ $factura->surname }}</p>
            <p><strong>NIF:</strong> {{ $factura->nif }}</p>
        </div>
        <div class="col s12 m6">
            <p><strong>ID del usuario que lo creó:</strong> {{ $factura->user_id }}</p>
            <p><strong>Email del usuario que lo creó:</strong> {{ $factura->user->email }}</p>
            <p><strong>ID del usuario de su última modificación:</strong> {{ $factura->last_update_user_id }}</p>
            <p><strong>Email del usuario de su última modificación:</strong> {{ $factura->last_update_user->email }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6">
            <p><strong>URL de imagen:</strong> {{ $factura->img_url }}</p>
            <p><strong>Tipo de factura:</strong> {{ $factura->type }}</p>
            <p><strong>Teléfono:</strong> {{ $factura->phone }}</p>
            <p><strong>Móvil:</strong> {{ $factura->mobile }}</p>
            <p><strong>Email:</strong> {{ $factura->email }}</p>
            <p><strong>Notas:</strong> {{ $factura->notes }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h3>Datos de facturación</h3>
        </div>
        <div class="col s12 m6">
            <p><strong>Nombre de facturación:</strong> {{ $factura->invoicing_name }}</p>
            <p><strong>Tipo de entidad:</strong> {{ $factura->entity_type }}</p>
            <p><strong>NIF:</strong> {{ $factura->nif }}</p>
        </div>
        <div class="col s12 m6">
            <p><strong>País:</strong> {{ $factura->country }}</p>
            <p><strong>Provincia:</strong> {{ $factura->state }}</p>
            <p><strong>Ciudad:</strong> {{ $factura->city }}</p>
            <p><strong>Código postal:</strong> {{ $factura->zip_code }}</p>
            <p><strong>Dirección:</strong> {{ $factura->address_1 }}</p>
            <p><strong>Dirección línea 2:</strong> {{ $factura->address_2 }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="collection">
                @foreach($productos as $producto)
                    @include("facturas._single_product",["elem" => $producto->name, "url" => route("producto.show",[$producto->id]), "price" => $producto->price])
                @endforeach
                @foreach($servicios as $servicio)
                    @include("facturas._single_product",["elem" => $servicio->name, "url" => route("servicio.show",[$servicio->id]), "price" => $servicio->price])
                @endforeach
            </div>

        </div>
    </div>
@endsection