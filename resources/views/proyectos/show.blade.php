@extends('index')

<style>
    textarea {
        resize: none;
    }
</style>

@section('title')
    Proyecto {{$proyecto->id}}
@endsection

@section('elem_title')
    Proyecto {{$proyecto->id}}
@endsection

@section('elem_description')
    Datos del proyecto:
@endsection

@section('search')
    @include('_search', ['search_route' => 'proyecto.show', 'searchbox_text' => 'Buscar un proyecto...'])
@endsection

@section('form')

        <!-- User's ID output -->
    <div class="form-group">
        {!! Form::label('user_id','Id del usuario:') !!}
        {!! Form::number('user_id',$proyecto -> user_id,['readonly']) !!}
    </div>

    <!-- Project's name input -->
    <div class="form-group">
        {!! Form::label('name','Nombre del proyecto:') !!}
        {!! Form::text('name',$proyecto -> name,['readonly']) !!}
    </div>

    <!-- Image's URL input -->
    <div class="form-group">
        {!! Form::label('img_url','URL de la imagen asociada:') !!}
        {!! Form::text('img_url',$proyecto -> img_url,['readonly']) !!}
    </div>

    <!-- Total amount input -->
    <div class="form-group">
        {!! Form::label('total_amount','Importe total del proyecto:') !!}
        {!! Form::number('total_amount',$proyecto -> total_amount,['readonly']) !!}
    </div>

    <!-- Starting date input -->
    <div class="form-group">
        {!! Form::label('starting_date','Fecha de inicio del proyecto:') !!}
        {!! Form::input('date','starting_date',$proyecto -> starting_date,['readonly']) !!}
    </div>

    <!-- Ending date input -->
    <div class="form-group">
        {!! Form::label('ending_date','Fecha de finalización del proyecto:') !!}
        {!! Form::input('date','ending_date',$proyecto -> ending_date,['readonly']) !!}
    </div>

    <!-- Notes input -->
    <div class="form-group">
        {!! Form::label('notes','Notas:') !!}
        {!! Form::textarea('notes',$proyecto -> notes) !!}
    </div>
    <p>
        <!-- Submit bottom -->
        <a href="{{route('proyecto.edit',$proyecto->id)}}"class="btn">Modificar proyecto</a>
    </p>

@endsection