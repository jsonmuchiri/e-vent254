<div class="container" style="margin-top: 40px; background-color: #f5f5f5;padding-top: 10px;">
    <div class="row">
        <div class="col-sm-2">
            <h6>Our mission</h6>
            <p>Our mission is to make it possible to reach our audience who maybe interested to know about the happening of your
                events</p>
        </div>
        <div class="col-sm-10">

            <div class="row">
                <div class="col-md-3" id="footernav">
                    <h6>Navigate</h6>
                    <ul>
                        <li><a href="{{url('home')}}">HOME</a></li>
                        <li><a href="{{url('today')}}">TODAY</a></li>
                        <li><a href="{{url('upcoming')}}">UPCOMING</a></li>
                        <li><a href="{{url('about')}}">ABOUT</a></li>
                        <li><a href="{{url('contact')}}">CONTACT</a></li>
                        <li><a href="{{url('register')}}">REGISTER</a></li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <h6>Subscribe to our newsletter</h6>
                    <form action="{{url('newsletter')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('emailsubscribe') ? ' has-error' : ''}}">
                            <label for="emailsubscribe" class="form-control-label"><i class="fa fa-email prefix" style="color: white;"></i>
                                Email</label>
                            <input type="email" class="form-control form-control-sm" name="emailsubscribe" id="emailsubscribe"
                                   value="{{old('emailsubscribe')}}" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">You must login first.</small>
                            @if($errors->has('emailsubscribe'))
                                <span class="form-text">
                            <strong>{{$errors->first('emailsubscribe')}}</strong>
                        </span>
                            @endif
                        </div>
                        <button class="btn btn-success btn-sm">Submit</button>
                    </form>
                </div>
                <div class="col-sm-4">
                    <h6>We are in social media</h6>
                    <a class="btn btn-sm btn-social btn-twitter" href="" title="twitter">
                        <span class="fa fa-twitter"></span> @event254
                    </a>
                    <a class="btn btn-sm btn-social-icon btn-facebook" href="" title="facebook">
                        <span class="fa fa-facebook-square" aria-hidden="true"></span> event254facebook
                    </a>
                    <a class="btn btn-sm btn-social-icon btn-youtube" href="" title="youtube">
                        <span class="fa fa-youtube-square"></span> event254
                    </a>
                    <a class="btn btn-sm btn-social-icon btn-instagram" href="" title="instagram">
                        <span class="fa fa-instagram"></span> event254
                    </a>
                    <br>
                    <br>
                    <h6>contact us</h6>
                    <p><i class="fa fa-phone prefix"></i> 071007000 , 0793030303</p>
                    <p><i class="fa fa-envelope prefix"></i> event254@gmail.com</p>
                    <p><i class="fa fa-pencil prefix"></i> 504-20300,Nairobi</p>
                </div>
                <br>
                <br>
            </div>

        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <p>Copyright @event2017</p>
        </div>
        <div class="col-sm-4">
            <p>
                <a href="">Cookies</a> | <a href="">Terms&Conditions</a> | <a href="">Policy</a> | <a href=""></a>
            </p>
        </div>
        <div class="col-sm-4">
            <p>
                Designed by:J Muchiri(ujuziDesigns)
            </p>
            <p>
                <i class="fa fa-phone"></i> 0711437125
            </p>
        </div>
    </div>
</div>