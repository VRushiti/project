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

<!-- Navigation -->
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
                    <a href="{{url('/aboutus')}}">ABOUT US</a>
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


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

           @yield('content')




        </div>







        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4" style="padding-top:115px">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- jQuery -->

<script src="{{asset('js/libs.js')}}"></script>

<div id="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4" id="about-ftr">
                <i class="fa fa-building fa-2x"></i>
                <span>A Small Introduction</span>
                <small>replace this dummy text with your text</small>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent suscipit sem vel ipsum elementum venenatis.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent suscipit sem vel ipsum elementum venenatis.

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent suscipit sem vel ipsum elementum venenatis.
                </p>
            </div>

            <div class="col-lg-4 col-md-4">
                <i class="fa fa-sliders fa-2x"></i>
                <span>Our location</span>
                <br>

                    Address: Rr.Fehmi Agani
                    <br />
                    Mob: 44123123
                    <br />
                    Tel: 38321123
                    <br />
                    E-mail: info@eoa.com
                <br />
                    Web: www.eoa.com
                    <br />
                    <br />

                <form role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email" required />
                        <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Subscribe!</button>
                            </span>
                    </div>
                </form>
            </div>
            <div id="facebook-div-sec" class="col-lg-4 col-md-4">

                <iframe style="padding-top:0" src="https://web.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&width=292&colorscheme=light&show_faces=true&stream=true&header=true&height=427&_rdr&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" class="facebook-div"></iframe>

            </div>
        </div>
    </div>
</div>
<!--./ footer-sec  End -->
<div id="footser-end">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                2017 All Rights Reserved

            </div>
        </div>

    </div>
</div>

@yield('scripts')





</body>

</html>
