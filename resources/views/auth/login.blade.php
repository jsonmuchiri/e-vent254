@extends('includes.app')

@section('title')
    Login
@endsection


@section('content')
    <div class="container" style="background-color: white;padding-bottom: 10px;padding-top: 5px;margin-top: 4px;">
        <div class="row">
            <div class="col-md-5">
                <h5>Login</h5>
                @include('errors.info')
                @include('errors.warning')
                <form action="{{route('login')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : ''}}">
                        <label for="username"><i class="fa fa-user prefix"></i> Username</label>
                        <input type="text" name="username" id="username" class="form-control form-control-sm" value="{{old('username')}}"
                               required
                               autofocus>
                        @if($errors->has('username'))
                            <span class="form-text">
  						        <strong>
  							         {{$errors->first('username')}}
  						        </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-errors' : ''}}">
                        <label for="password"><i class="fa fa-lock prefix"></i> Password</label>
                        <input type="password" name="password" id="password" class="form-control form-control-sm" required>
                        @if($errors->has('password'))
                            <span class="form-text">
                                <strong>{{$errors->first('password')}}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Login</button>
                </form>
            </div>

        </div>
    </div>
@endsection