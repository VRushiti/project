@extends('layouts.admin')




@section('content')

    @role('admin')
    <h1>User Panel</h1>
    @endrole
    @role('owner')
    <h1>Admin Panel</h1>
    @endrole



@stop