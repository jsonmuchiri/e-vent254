@extends('includes.app')
@section('title')
    Feedback
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5>Feedback</h5>
                <p>You can give us some feedback about the services we offer.
                    We would love to know because we take them seriously.</p>
                <form action="{{url('feedback')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('feedback') ? 'has-error' : '' }}">
                        <label for="feedback">Feedback</label>
                        <textarea class="form-control" rows="5" id="feedback" name="feedback"></textarea>
                        @if($errors->has('feedback'))
                            <span class="form-text">
                            <strong>
                                {{$errors->first('feedback')}}
                            </strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </form>
            </div>
            <div class="col-md-7">
                <h5>Some recent feedback</h5>
                @foreach($fbacks as $fback)
                    <p>{{$fback->user()->getName()}}</p>
                    <p>{{$fback->feedback}}</p>
                @endforeach
                {!! $fbacks->links() !!}
            </div>
        </div>
    </div>
@endsection