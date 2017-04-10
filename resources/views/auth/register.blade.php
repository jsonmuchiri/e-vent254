@extends('includes.app')

@section('title')
  Register
@endsection


@section('content')
  <div class="container" style="background-color: white;margin-top: 5px;padding-bottom: 10px;margin-top: 4px;">
  	<div class="row">
  		<div class="col-md-5">
  			<h5>Create account</h5>
                @include('errors.warning')
                @include('errors.info')
                <form action="{{route('register')}}" method="POST" >
                 {{csrf_field()}}
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username"> <i class="fa fa-user"></i> Choose a Username</label>
                                <input id="username" type="text" class="form-control form-control-sm" name="username" value="{{ old('username') }}"
                                  aria-describedby="help"     required autofocus>
                        <small id="help" class="form-text text-muted">Must be more than 6 character long</small>
                                @if ($errors->has('username'))
                                    <span class="form-text">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif

                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                       <label for="email"><i class="fa fa-envelope"></i> Choose an Email</label>
                      <input type="email" name="email" class="form-control form-control-sm" id="email" value="{{old('email')}}"
                             aria-describedby="help">
                        <small id="help" class="form-text text-muted">We'll never share your email with anyone else.</small>

                      @if ($errors->has('email'))
                        <span class="form-text">
                          <strong>{{ $errors->first('email')}}</strong>
                        </span>
                      @endif

                    </div>
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password"><i class="fa fa-lock"></i> Choose a Password</label>
                                <input id="password" type="password" class="form-control form-control-sm" name="password" value="{{ old('password') }}"
                                aria-describedby="help">
                         <small id="help" class="form-text text-muted">Must be more than 8 character long</small>

                                @if ($errors->has('password'))
                                    <span class="form-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                    </div>
                    <div class="md-form">
                        <button type="submit" class="btn btn-success btn-sm">Register</button>
                    </div>

                </form>
  		</div>
  	</div>
  </div>
@endsection