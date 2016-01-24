@extends('index')

<style>
    textarea {
        resize: none;
    }
</style>

@section('title')
    Crear proyecto
@endsection

@section('elem_title')
    Nuevo proyecto
@endsection

@section('elem_description')
    Introduce los datos del proyecto a crear.
@endsection

@section('search')
    @include('_search', ['search_route' => 'proyecto.show', 'searchbox_text' => 'Buscar un proyecto...'])
@endsection

@section('form')
    {!! Form::open(['method' => 'post', 'route' => 'proyecto.store']) !!}
        <!-- User ID input -->
        <div class="form-group">
            {!! Form::label('user_id','Id del usuario:') !!}
            {!! Form::number('user_id',null,['class' => 'form-control', "min" => '0']) !!}
        </div>

        <!-- Project's name input -->
        <div class="form-group">
            {!! Form::label('name','Nombre del proyecto:') !!}
            {!! Form::text('name',null,['class' => 'form-control']) !!}
        </div>

        <!-- Image's URL input -->
        <div class="form-group">
            {!! Form::label('img_url','URL de la imagen asociada:') !!}
            {!! Form::text('img_url',null,['class' => 'form-control']) !!}
        </div>

        <!-- Total amount input -->
        <div class="form-group">
            {!! Form::label('total_amount','Importe total del proyecto:') !!}
            {!! Form::number('total_amount',null,['class' => 'form-control',"min" => '0' , "step" => 'any']) !!}
        </div>

        <!-- Starting date input -->
        <div class="form-group">
            {!! Form::label('starting_date','Fecha de inicio del proyecto:') !!}
            {!! Form::input('date','starting_date',date('Y-m-d'),['class' => 'form-control']) !!}
        </div>

        <!-- Ending date input -->
        <div class="form-group">
            {!! Form::label('ending_date','Fecha de finalización del proyecto:') !!}
            {!! Form::input('date','ending_date',date('Y-m-d'),['class' => 'form-control']) !!}
        </div>

        <!-- Notes input -->
        <div class="form-group">
            {!! Form::label('notes','Notas:') !!}
            {!! Form::textarea('notes',null,['class' => 'form-control']) !!}
        </div>
        <p>
        <!-- Submit bottom -->
        <button type="submit" class="btn btn-default">Crear proyecto</button>
        </p>
    {!! Form::close() !!}
@endsection