<div id="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4" id="about-ftr">
                <i class="fa fa-building fa-2x"></i>
                @foreach($about as $ab)
                <span>{{ $ab->title }}</span>
                <p>
                   {{str_limit($ab->body, 400) }}
                </p>
                    @endforeach
            </div>

            <div class="col-lg-4 col-md-4">
                <i class="fa fa-sliders fa-2x"></i>
                <span>Our location</span>
                <br>
                @foreach($contact as $con)
                    Address: {{ $con->address }}
                    <br />
                    Mob: {{$con->mob}}
                    <br />
                    Tel: {{$con->tel}}
                    <br />
                    E-mail: {{$con->email}}
                    <br />
                    Web: {{$con->web}}
                    <br />
                    <br />
                @endforeach
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
