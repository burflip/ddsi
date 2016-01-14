@extends('main')

@section('body_class')
    id="auth_wrapper"
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m8 l4 offset-m2 offset-l4">
                <div id="auth_box">
                    <h3 class="brand-logo grey-text text-darken-3">DDSI</h3>
                    @yield('auth_form')
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection