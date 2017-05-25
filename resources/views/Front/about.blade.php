@include('layouts.app')
@include('Front.social')


<div class="general-subhead">
    <h1>All Events</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="padding-top: 15px">
            <img src="images/eoa.jpg" alt="" width="1200" height="300">
        </div>
        <div class="col-lg-8">

        @foreach($about as $ab)
            <h1>{{$ab->title}}</h1>
            <p>{{$ab->body}}</p>
        @endforeach
        </div>
        <div class="col-lg-4" style="padding-top: 80px">
            <div id="facebook-div-sec" class="col-lg-4 col-md-4">

                <iframe style="padding-top:0" src="https://web.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&width=292&colorscheme=light&show_faces=true&stream=true&header=true&height=427&_rdr&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" class="facebook-div"></iframe>

            </div>
        </div>
    </div>

</div>


@include('layouts.footer')