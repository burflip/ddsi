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
            <p><strong>Días de aceptación:</strong> {{ $factura->name }}</p>
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
        <div class="col s12">
            <h4>Datos del emisor</h4>
        </div>
        @include("facturas._invoicing_data_show",["elem" => $factura, "prefix" => "e_"])
        <div class="col s12">
            <h4>Datos del receptor</h4>
        </div>
        @include("facturas._invoicing_data_show",["elem" => $factura, "prefix" => "r_"])
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
    <div class="row">
        <div class="col s12">
            <p class="flow-text">Impuestos aplicables</p>
        </div>
        <div class="col s12">
            @foreach($impuestos as $impuesto)
                <a href="{{ route("impuesto.show",[$impuesto->id]) }}">{{ $impuesto->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <p class="flow-text">Total de factura: <strong>{{ $total }}</strong>€</p>
        </div>
    </div>
@endsection