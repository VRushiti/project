@extends('layouts.admin')






@section('content')


    <h1>Create Contact</h1>

    <div class="row">
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminContactController@store']) !!}

        <div class="form-group">
            {!! Form::label('address', 'Address:') !!}
            {!! Form::text('address', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('mob', 'Mob:') !!}
            {!! Form::number('mob', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('tel', 'Tel:') !!}
            {!! Form::number('tel', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('web', 'Web:') !!}
            {!! Form::text('web', null, ['class'=>'form-control'])!!}
        </div>




        <div class="form-group">
            {!! Form::submit('Create Contact', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>


    <div class="row">


        @include('includes.form_error')



    </div>




@stop