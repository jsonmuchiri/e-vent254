@extends('includes.app')
@section('title')
    E-vent254
@endsection
@section('content')
    <section id="cover" style="margin-top: 5px;">
        <div id="cover-caption">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h4>Welcome to E-vent254 </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <h4>Welcome to E-vent254 </h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Login</h4>
                        @include('errors.info')
                        @include('errors.warning')
                        <form action="{{route('login')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : ''}}">
                                <label for="username" class="sr-only"><i class="fa fa-user prefix"></i> Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="{{old('username')}}"
                                       placeholder="username" required>
                                @if($errors->has('username'))
                                    <span class="form-text">
  						        <strong>
  							         {{$errors->first('username')}}
  						        </strong>
                            </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-errors' : ''}}">
                                <label for="password" class="sr-only"><i class="fa fa-lock prefix"></i> Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                                @if($errors->has('password'))
                                    <span class="form-text">
                                <strong>{{$errors->first('password')}}</strong>
                            </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection