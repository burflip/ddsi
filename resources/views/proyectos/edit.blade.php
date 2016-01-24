@extends('index')

<style>
    textarea {
        resize: none;
    }
</style>

@section('title')
    Modificar proyecto {{$proyecto->id}}
@endsection

@section('elem_title')
    Modificar proyecto {{$proyecto->id}}
@endsection

@section('elem_description')
    Modifique los datos que desee.
@endsection

@section('search')
    @include('_search', ['search_route' => 'proyecto.show', 'searchbox_text' => 'Buscar un proyecto...'])
@endsection

@section('form')
    {!! Form::open(['method' => 'put', 'route' => 'proyecto.update']) !!}
        <!-- User ID input -->
        <div class="form-group">
            {!! Form::label('user_id','Id del usuario:') !!}
            {!! Form::number('user_id',$proyecto -> user_id,['class' => 'form-control', "min" => '0']) !!}
        </div>

        <!-- Project's name input -->
        <div class="form-group">
            {!! Form::label('name','Nombre del proyecto:') !!}
            {!! Form::text('name',$proyecto -> name,['class' => 'form-control']) !!}
        </div>

        <!-- Image's URL input -->
        <div class="form-group">
            {!! Form::label('img_url','URL de la imagen asociada:') !!}
            {!! Form::text('img_url',$proyecto -> img_url,['class' => 'form-control']) !!}
        </div>

        <!-- Total amount input -->
        <div class="form-group">
            {!! Form::label('total_amount','Importe total del proyecto:') !!}
            {!! Form::number('total_amount',$proyecto -> total_amount,['class' => 'form-control',"min" => '0' , "step" => 'any']) !!}
        </div>

        <!-- Starting date input -->
        <div class="form-group">
            {!! Form::label('starting_date','Fecha de inicio del proyecto:') !!}
            {!! Form::input('date','starting_date',$proyecto -> starting_date,['class' => 'form-control']) !!}
        </div>

        <!-- Ending date input -->
        <div class="form-group">
            {!! Form::label('ending_date','Fecha de finalización del proyecto:') !!}
            {!! Form::input('date','ending_date',$proyecto -> ending_date,['class' => 'form-control']) !!}
        </div>

        <!-- Notes input -->
        <div class="form-group">
            {!! Form::label('notes','Notas:') !!}
            {!! Form::textarea('notes',$proyecto -> notes,['class' => 'form-control']) !!}
        </div>

        <p>
            <!-- Submit bottom -->
            <button type="submit" class="btn btn-default">Actualizar</button>
        </p>
    {!! Form::close() !!}
@endsection