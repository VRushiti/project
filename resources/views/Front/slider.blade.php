@include('layouts.app')

<div id="main-slider">

    <div id="carousel-example" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="item active">

                <img src="{{asset('img/Club.jpg')}}" alt="Club"  />
                <div class="carousel-caption ">
                    <h4>Clubs</h4>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('img/pub.jpg')}}" alt="Pub" />
                <div class="carousel-caption ">
                    <h4>Pub</h4>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('img/restaurant.jpg')}}" alt="Restaurant" />
                <div class="carousel-caption ">
                    <h4>Restaurant</h4>
                </div>
            </div>
        </div>
        <!--INDICATORS-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>
        <!--PREVIUS-NEXT BUTTONS-->
        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <i class="fa fa-angle-left fa-3x control-icon clr-main"></i>
        </a>
        <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <i class="fa fa-angle-right fa-3x control-icon clr-main"></i>
        </a>
    </div>

</div>

