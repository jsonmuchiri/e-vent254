@extends('includes.app')

@section('title')

    Welcome

@endsection


@section('content')
    <div class="container" style="background-color: white;padding-bottom: 10px;padding-top: 5px;margin-top: 4px;">
        <div class="row">
            <div class="col-md-9">
                @include('errors.warning')
                @include('errors.info')
                @include('includes.partials.gallery')</div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection