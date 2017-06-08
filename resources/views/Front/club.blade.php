
    <div class="div-social-top">
        <h4>Clubs</h4>
    </div>
    <div class="row pad-row">
        @foreach($posts as $post)
            @if($post->category_id == 1)

        <div class="col-lg-4 col-md-4 col-sm-4 ">

                <div class="portfolio-item">
                    <a href="{{url('/post/'.trim(str_replace(' ', '-', $post->slug)))}}">
                        <img width="550px" height="500px" src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" class="img-responsive" alt=""/>
                        <h5 >{{$post->title}}</h5>
                    </a>
                </div>


        </div>
            @endif
        @endforeach
    </div>

    <br>

    <div class="div-social-top">
        <h4>Pubs</h4>
    </div>
    <div class="row pad-row">
        @foreach($posts as $post)
            @if($post->category_id == 2)

                <div class="col-lg-4 col-md-4 col-sm-4 ">

                    <div class="portfolio-item">
                        <a href="{{url('/post/'.trim(str_replace(' ', '-', $post->slug)))}}">
                            <img width="550px" height="500px" src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" class="img-responsive" alt=""/>
                            <h5 >{{$post->title}}</h5>
                        </a>
                    </div>


                </div>
            @endif
        @endforeach
    </div>

    <br>

    <div class="div-social-top">
        <h4>Restaurants</h4>
    </div>
    <div class="row pad-row">
        @foreach($posts as $post)
            @if($post->category_id == 4)

                <div class="col-lg-4 col-md-4 col-sm-4 ">

                    <div class="portfolio-item">
                        <a href="{{url('/post/'.trim(str_replace(' ', '-', $post->slug)))}}">
                            <img width="550px" height="500px" src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" class="img-responsive" alt=""/>
                            <h5 >{{$post->title}}</h5>
                        </a>
                    </div>


                </div>
            @endif
        @endforeach
    </div>





