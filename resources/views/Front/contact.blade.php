@include('layouts.app')
@include('Front.social')
<div class="general-subhead">
    <h1>Contact</h1>
</div>


<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6  col-sm-12">
                <h3>Contact</h3>
                <hr>


                @foreach($contact as $con)
                <p>
                    Address: {{$con->address}}
                    <br>
                    Mob: {{$con->mob}}
                    <br>
                    Tel: {{$con->tel}}
                    <br>
                    E-mail: {{$con->email}}
                    <br>
                    Web: {{$con->web}}
                </p>
                   @endforeach


            </div>
            <div class="col-lg-6 col-md-6  col-sm-12">
                <h3>Suggest</h3>
                <hr />
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Subject:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Message:</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>

        </div>
    </div>

</section>


@include('layouts.footer')