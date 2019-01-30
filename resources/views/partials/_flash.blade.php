@if(session()->has('flash_notification.message'))
    <div class="alert alert-{{ session()->get('flash_notification.level') }} alert-dismissible fade show" role="alert">
        <strong>
            {!! session()->get('flash_notification.message') !!}
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
