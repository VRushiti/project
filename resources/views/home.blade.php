@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8">

        {{--@foreach($posts as $post)--}}

            {{--<div class="row pad-row">--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-4 ">--}}

                    {{--<div class="portfolio-item">--}}
                        {{--<a href="{{url('/post/'.trim(str_replace(' ', '-', $post->slug)))}}">--}}
                            {{--<img width="750px" height="500px" src="{{$post->photo->file}}" class="img-responsive" alt=""/>--}}
                            {{--<h5 >{{$post->title}}</h5>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}
{{--</div>--}}



{{--<div id="request-quote">--}}
    {{--<div class="container">--}}

        {{--<div class="row">--}}
            {{--<div class="col-lg-12 col-md-12" >--}}
                {{--<div class="text-center">--}}
                    {{--<h3>REQUEST A QUOTE NOW</h3>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing  condimentum. </p>--}}
                    {{--<br />--}}
                    {{--<br />--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-6 col-md-6">--}}
                {{--<form action="store" method="POST">--}}
                    {{--<div class="col-lg-12 col-md-12 ">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text" class="form-control" required="required" placeholder="Name" name="name" />--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-12 col-md-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="email" class="form-control" required="required" placeholder="Email address" name="email" />--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-12 col-md-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text" class="form-control" required="required" placeholder="Notes" name="notes"/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-12 col-md-12">--}}
                        {{--<button type="submit" class="btn btn-primary">SUBMIT REQUEST</button>--}}

                    {{--</div>--}}
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                {{--</form>--}}

            {{--</div>--}}
            {{--@foreach($quotes as $quote)--}}
                {{--<div class="col-lg-6 col-md-6">--}}
                    {{--<blockquote>--}}
                        {{--<p>{{ $quote->notes }}</p>--}}
                        {{--<small> {{ $quote->name }}</small>--}}
                    {{--</blockquote>--}}
                {{--</div>--}}
            {{--@endforeach--}}

        <h1>Home</h1>
        </div>
    </div>
</div>




{{--<div id="request-quote">--}}
    {{--<div class="container">--}}

        {{--<div class="row">--}}
            {{--<div class="col-lg-12 col-md-12" >--}}
                {{--<div class="text-center">--}}
                    {{--<h3>REQUEST A QUOTE NOW</h3>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing  condimentum. </p>--}}
                    {{--<br />--}}
                    {{--<br />--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-6 col-md-6">--}}
                {{--<form action="store" method="POST">--}}
                    {{--<div class="col-lg-12 col-md-12 ">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text" class="form-control" required="required" placeholder="Name" name="name" />--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-12 col-md-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="email" class="form-control" required="required" placeholder="Email address" name="email" />--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-12 col-md-12">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text" class="form-control" required="required" placeholder="Notes" name="notes"/>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-12 col-md-12">--}}
                        {{--<button type="submit" class="btn btn-primary">SUBMIT REQUEST</button>--}}

                    {{--</div>--}}
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                {{--</form>--}}

            {{--</div>--}}
            {{--@foreach($quotes as $quote)--}}
            {{--<div class="col-lg-6 col-md-6">--}}
            {{--<blockquote>--}}
            {{--<p>{{ $quote->notes }}</p>--}}
            {{--<small> {{ $quote->name }}</small>--}}
            {{--</blockquote>--}}
            {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}










@endsection
