@extends('layouts.admin');

@section('content')

    <h1>My Profile</h1>

    <div class="row">

        <div class="col-md-3">
            <img src="{{Auth::user()->photo ? Auth::user()->photo->file : '/images/avatar.png'}}" alt="" class="img-responsive img-circle">
        </div>

        <div class="col-sm-9">
            <h3>Name: {{Auth::user()->name}}</h3>
            <h3>Email: {{Auth::user()->email}}</h3>
            <h3>Role: {{Auth::user()->role->name}}</h3>
            <a href="{{route('admin.users.edit', Auth::user()->id)}}"><button class="btn btn-primary col-sm-2" value="Edit Profile"> Edit Profile</button></a>
        </div>


    </div>

    @stop