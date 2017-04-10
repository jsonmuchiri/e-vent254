<nav class="navbar navbar-toggleable-md sticky-top navbar-light bg-faded" style="background-color: #ffffff">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{url('home')}}"><strong>E-vent254</strong></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            @if(!Auth::check())
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">contact</a>
                </li>



            @else
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('today')}}">Today</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('upcoming')}}">Upcoming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('feedback')}}">Feedback</a>
                </li>


        </ul>
        {{--<form class="form-inline  navbar-left">--}}
        {{--<input class="form-control mr-sm-2 form-control-sm" type="text" placeholder="Search">--}}
        {{--<button class="btn btn-outline-success my-2 my-sm-0 btn-sm" type="submit">Search</button>--}}
        {{--</form>--}}
        @endif
        @if(Auth::check())
            <ul class="navbar-nav navbar-right">

                <li class="nav-item">
                    <a href="" class="nav-link">{{Auth::user()->getName()}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('logout')}}">Logout</a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                    </li>

            </ul>
        @endif
    </div>

</nav>

