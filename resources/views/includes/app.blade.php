<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{URL::to('Assets/fontowesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('Assets/fontowesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('Assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('Assets/css/bootstrap.css')}}">
    <style type="text/css">
        h1, h2, h3, h4, h5 {
            color: orange;
        }

        h6 {
            font-weight: bold;
            color: #00acc1;
        }

        .form-text {
            color: #ac2925;
        }

        #footernav {
            text-align: center;
        }

        #footernav ul {
            list-style: none;
        }

        #footernav ul li a {
            color: black;

        }

        body, html {
            height: 100%;
        }

        #cover-caption {
            width: 100%;
        }

        #cover {
            background: #222 url("Assets/images/pic2.jpg") center center no-repeat;
            background-size: cover;
            color: white;
            height: 500px;
        }

    </style>
</head>
<body style="background-color: #f5f5f5; ">
{{--<img src="{{URL::to('Assets/images/top.jpg')}}" class="img-fluid" style="height: 15px;margin-top: -15px;">--}}

@include('includes.partials.nav')
@yield('content')
@include('includes.partials.footer')


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="js/sweetalert.min.js"></script>
<script type="javascript" src="{{URL::to('Assets/js/bootstrap.js')}}"></script>
<script type="javascript" src="{{URL::to('Assets/js/bootstrap.min.js')}}"></script>

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')

</body>
</html>