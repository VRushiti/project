@include('layouts.app')
@include('Front.social')

<div class="general-subhead">
    <h1>All Events</h1>

</div>

<section id="port-folio">
    <div class="container">
        <div class="row pad-row">
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-4 col-sm-4 ">
                    <div class="portfolio-item">
                        <img src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" class="img-responsive " alt="" />
                        <h5 >{{$post->title}}</h5>
                        <div class="overlay">
                            <a class="preview btn btn-success " title="Image Title Here" href="{{url('/post/'.trim(str_replace(' ', '-', $post->slug)))}}">VIEW PROJECT</a>
                            <p>
                               {{ str_limit($post->body) }}
                            </p>
                            <a class="preview"  href="{{url('/post/'.trim(str_replace(' ', '-', $post->slug)))}}" >
                                <i class="fa fa-microphone fa-5x"></i>
                                See Project Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<div class="row">
    <div class="col-sm-6 col-sm-offset-5">

        {{$posts->render()}}

    </div>
</div>

<div id="request-quote">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12" >
                <div class="text-center">
                    <h3>REQUEST A QUOTE NOW</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing  condimentum. </p>
                    <br />
                    <br />
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <form action="events/store" method="POST">
                    <div class="col-lg-12 col-md-12 ">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Name" name="name" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <input type="email" class="form-control" required="required" placeholder="Email address" name="email" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Notes" name="notes"/>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="btn btn-primary">SUBMIT REQUEST</button>

                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>

            </div>
            @foreach($quotes as $quote)
                <div class="col-lg-6 col-md-6">
                    <blockquote>
                        <p>{{ $quote->notes }}</p>
                        <small> {{ $quote->name }}</small>
                    </blockquote>
                </div>
            @endforeach
        </div>
    </div>
</div>



@include('layouts.footer')