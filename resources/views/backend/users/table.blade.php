
@if(session('status') && session('message'))

<div class="alert alert-{{session('status')}} alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <div class="alert-message">
        {{ session('message') }}
    </div>
</div>

@endif

<div>
    {!! $table !!}
</div>