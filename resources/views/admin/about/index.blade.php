@extends('layouts.admin')




@section('content')
<h1>About Us</h1>
<table class="table">
    <thead>
    <tr>
        <th>Title</th>
        <th>Body</th>
    </tr>
    </thead>
<tbody>
    @if($about)
        @foreach($about as $ab)

        <tr>
            <td>{{ $ab->title }}</td>
            <td>{{ $ab->body }}</td>
        </tr>

            @endforeach
        @endif
</tbody>
</table>

    <div class="row">


        @include('includes.form_error')



    </div>




@stop