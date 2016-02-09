<?php
$dashboard_elems = [
        route("producto.create") => ["deployment", "Crear productos"],
        route("servicio.create") => ["add_database", "Crear servicios"],
        route("producto.index") => ["shop", "Productos"],
        route("servicio.index") => ["accept_database", "Servicios"],
        route("proyecto.index") => ["opened_folder", "Proyectos"],
        route("proyecto.create") => ["idea", "Crear proyecto"],
        route("cliente.index") => ["contacts", "Agenda"],
        route("cliente.create") => ["good_decision", "Nuevo cliente"],
        route("factura.index") => ["filing_cabinet", "Ver facturas"],
        route("factura.create") => ["invite", "Nueva factura"],
        route("usuario.index") => ["address_book", "Usuarios"],
        route("usuario.create") => ["key", "Crear usuario"],
        route("presupuesto.index") => ["money_transfer","Presupuestos"],
        route("presupuesto.create") => ["calculator","Nuevo presupuesto"]

];
$i=1;
?>
@extends('main')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="row padded">
            <div class="col s12">
                <div class="row">
                    <div class="col s12">
                        <h1 class="grey-text text-darken-4">Bienvenido a tu panel, {{ $name }}</h1>
                        <h5 class="grey-text text-darken-1">¿Qué deseas hacer?</h5>
                    </div>
                </div>
                <div class="row">
                    @foreach($dashboard_elems as $url => $elem)
                        @if($i%4 == 0)<div class="row"> @endif
                        <a href="{!! $url !!}">
                            <div class="col s12 m4 l3 dashboard-item">
                                <div class="dashboard-item-icon">
                                    <img src="/components/flat-color-icons/svg/{{ $elem[0] }}.svg">
                                </div>
                                <div class="dashboard-item-text center-align uppercase">
                                    {{ $elem[1] }}
                                </div>
                            </div>
                        </a>
                        @if($i%4 == 0) </div> @endif
                        <?php $i++; ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        initHome();
    </script>
@endsection