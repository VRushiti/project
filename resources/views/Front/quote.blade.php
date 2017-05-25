

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

