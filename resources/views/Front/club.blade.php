
    <div class="div-social-top">
        <h4>Eventet e Fundit</h4>
    </div>
    <div class="row pad-row">
        @foreach($posts as $post)
        <div class="col-lg-4 col-md-4 col-sm-4 ">

                <div class="portfolio-item">
                    <a href="{{url('/post/'.trim(str_replace(' ', '-', $post->slug)))}}">
                        <img width="550px" height="500px" src="{{$post->photo->file}}" class="img-responsive" alt=""/>
                        <h5 >{{$post->title}}</h5>
                    </a>
                </div>


        </div>
        @endforeach
    </div>


