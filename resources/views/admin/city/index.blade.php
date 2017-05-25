@extends('layouts.admin')





@section('content')

    <h1>Cities</h1>


    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=> 'CityCategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create City', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}



    </div>




    <div class="col-sm-6">


        @if($city)


            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Created date</th>
                </tr>
                </thead>
                <tbody>

                @foreach($city as $cit)

                    <tr>
                        <td>{{$cit->id}}</td>
                        <td><a href="{{route('admin.city.edit', $cit->id)}}">{{$cit->name}}</a></td>
                        <td>{{$cit->created_at ? $cit->created_at->diffForHumans() : 'no date'}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @endif



    </div>



@stop