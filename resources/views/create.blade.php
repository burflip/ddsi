@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="grey-text text-darken-3">@yield("resource-title")</h1>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                @yield("form")
            </div>
        </div>
    </div>
@endsection