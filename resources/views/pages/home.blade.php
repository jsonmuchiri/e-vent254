@extends('includes.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="container" style="background-color: white;padding-bottom: 10px;padding-top: 5px;margin-top: 4px;">
        <div class="row">

            <div class="col-sm-9">
                {{--@include('includes.partials.gallery')--}}

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{URL::to('Assets/images/sli1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{URL::to('Assets/images/sli2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{URL::to('Assets/images/sli3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <h5>Nihil Timandem est</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                    <div class="col-sm-4" style="border-left: 1px solid gray;border-radius: 2px;">
                        <h5>Nihil Timandem est</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

                        </p>
                    </div>
                    <div class="col-sm-4">
                        <h5>Nihil Timandem est</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="background-color: white;">
                <h6>Upcoming events</h6>
                <hr>
                @include('event.partials.upcominginclude')
            </div>
        </div>
    </div>
@endsection