@extends('layouts.admin')




@section('content')
   <h1>Contact</h1>

   <table class="table">
      <thead>
      <tr>
         <th>Address</th>
         <th>Mob</th>
         <th>Tel</th>
         <th>E-mail</th>
         <th>Web</th>

      </thead>
      <tbody>
      @if($contact)


         @foreach($contact as $con)

            <tr>
               <td><a href="{{url('admin/contact/edit', $con->id)}}">{{$con->address}}</a></td>
               <td>{{$con->mob}}</td>
               <td>{{$con->tel}}</td>
               <td>{{$con->email}}</td>
               <td>{{$con->web }}</td>


            </tr>

         @endforeach

      @endif

      </tbody>
   </table>



@stop