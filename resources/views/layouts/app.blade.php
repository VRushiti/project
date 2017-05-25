<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Home</title>
    <!--  Bootstrap Style -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <!--  Font-Awesome Animation Style -->
    <link href="{{asset('css/font-awesome-animation.css')}}" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script>
        window.Laravel ="<?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>"
    </script>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top menu-back">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{url('/')}}">
                <img width="150px" src="{{asset('img/logo2.png')}}" class="navbar-brand-logo " alt="" />
            </a>
        </div>
        <div class="navbar-collapse collapse" >
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="{{url('/')}}">HOME</a>
                </li>    <li class="dropdown">
                    <a href="{{url('aboutus')}}">ABOUT US</a>
                </li>

                <li class="dropdown">
                    <a href="{{url('events')}}">EVENTS</a>
                </li>
                <li class="dropdown">
                    <a href="{{url('contact')}}">CONTACT </a>
                </li>
                @if (Auth::guest())
                    <li class="dropdown">
                        <a href="login">LOGIN    </a>
                    </li>
                    <li class="dropdown">
                        <a href="register">REGISTER    </a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{url ('/admin')}}">Admin</a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

    </div>

</div>


@yield('content')

<!-- Scripts -->
<script src="/js/app.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script src="{{asset('js/jquery-1.10.2.js')}}"></script>
<!--  Core Bootstrap Script -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!--  Custom Scripts -->
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
