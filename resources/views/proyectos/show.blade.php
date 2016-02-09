@extends("show")

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
            {{--<p><strong>Email del usuario que lo creó:</strong> {{ $proyecto->user_id->email }}</p>--}}
            <p><strong>ID del usuario de su última modificación:</strong> {{ $proyecto->last_modification_user_id }}</p>
            {{--<p><strong>Email del usuario de su última modificación:</strong> {{ $proyecto->last_modification_user_id->email }}</p>--}}
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <p><strong>Nombre:</strong> {{ $proyecto->name }}</p>
            <p><strong>Importe total facturado del proyecto:</strong> {{ $proyecto->total_amount }}</p>
            <p><strong>URL de imagen:</strong> {{ $proyecto->img_url }}</p>
            <p><strong>Notas:</strong> {{ $proyecto->notes }}</p>
        </div>
    </div>
@endsection