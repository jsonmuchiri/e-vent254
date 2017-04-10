@if(Session::has('info'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size: 11px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
       <i class="fa fa-info-circle" aria-hidden="true"></i> {{Session::get('info')}}
    </div>
@endif