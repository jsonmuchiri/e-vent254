@if(Session::has('warning'))

    <div class="alert alert-danger alert-dismissible fade show" style="font-size: 11px;">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-warning" aria-hidden="true"></i>  {{Session::get('warning')}}
    </div>

@endif