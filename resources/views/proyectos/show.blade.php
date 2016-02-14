@extends("show")

@section('title')
    Mostrando a {{ $proyecto->name }}
@endsection

@section("resource_title")
    Proyecto #{{ $proyecto->id }} - {{ $proyecto->name }}
@endsection

@section("data")
    <div class="row">
        <div class="col s12 m6">
            <p><strong>Creado el:</strong> {{ $proyecto->created_at }}</p>
            <p><strong>Última modificación:</strong> {{ $proyecto->updated_at }}</p>
            <p><strong>Fecha de inicio del proyecto:</strong> {{ $proyecto->starting_date }}</p>
            <p><strong>Fecha de finalización del proyecto:</strong> {{ $proyecto->ending_date }}</p>
        </div>
        <div class="col m6">
            <p><strong>ID del usuario que lo creó:</strong> {{ $proyecto->user_id }}</p>
            <p><strong>Email del usuario que lo creó:</strong> {{ $proyecto->user->email }}</p>
            <p><strong>ID del usuario de su última modificación:</strong> {{ $proyecto->last_update_user_id }}</p>
            <p><strong>Email del usuario de su última modificación:</strong> {{ $proyecto->last_update_user->email }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m6">
            <p><strong>Nombre:</strong> {{ $proyecto->name }}</p>
            <p><strong>Importe total facturado del proyecto:</strong> {{ $proyecto->total_amount }}</p>
            <p><strong>URL de imagen:</strong> {{ $proyecto->img_url }}</p>
            <p><strong>Notas:</strong> {{ $proyecto->notes }}</p>
        </div>
        <div class="col m6">
            <p><strong>ID del cliente asociado:</strong> {{ $proyecto->client_id }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col s6">
            <div class="card indigo darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Facturas:</span>
                </div>
                <div class="card-action indigo lighten-5 indigo-text">
                    @foreach($facturas as $factura)
                        <div class="row ">
                            <div class="col s12">
                                <p>Factura <a href="{{ route("factura.show",$factura->id) }}">#{{$factura->id}}</a> Importe total: </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col s6">
            <div class="card indigo darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Presupuestos:</span>
                </div>
                <div class="card-action indigo lighten-5 indigo-text">
                    @foreach($presupuestos as $presupuesto)
                        <div class="row ">
                            <div class="col s12">
                                <p>Presupuesto <a href="{{ route("presupuesto.show",$presupuesto->id) }}">#{{$presupuesto->id}}</a> Importe total: </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection