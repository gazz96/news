@extends('backend.layout')

@section('content')

<div class="container-fluid p-0">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">List {{$resource->plurals}}</h1>
        <div>
            <a href="#offcanvasFilter" data-bs-toggle="offcanvas" style="border-style: dashed;" class="btn border-dashed btn-outline-secondary me-2">
                <span class="bi bi-filter"></span>
                Filter
            </a>

            <a href="#offcanvasForm" data-bs-toggle="offcanvas" class="btn btn-primary" hx-trigger="click" hx-target="#formWrapper" hx-get="{{route( $resource->slug . '.form')}}">
                <span class="bi bi-plus"></span>
                Add new data
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                    <div id="table">
                        {!! $table !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('footer')


<div
    class="offcanvas offcanvas-end"
    data-bs-scroll="true"
    tabindex="-1"
    id="offcanvasForm"
    aria-labelledby="Enable both scrolling & backdrop"
>
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">
            FORM {{ strtoupper($resource->singular) }}
        </h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>
    </div>
    <div class="offcanvas-body">
        <div id="formFeedback"></div>
        <div id="formWrapper">
        </div>
    </div>
</div>

<div
    class="offcanvas offcanvas-end"
    data-bs-scroll="true"
    tabindex="-1"
    id="offcanvasFilter"
>
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">
            Filter
        </h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>
    </div>
    <div class="offcanvas-body">
        <form action="">
            <input type="hidden" name="id" value="">
            
            <div class="mb-3">
                <label for="i-s">Search</label>
                <input type="text" name="s" class="form-control" id="i-s" placeholder="input your keyword" 
                hx-get="{{route( $resource->slug . '.table')}}" hx-trigger="keyup changed delay:1s"
                hx-target="#table">
            </div>

            {{-- <button class="btn btn-primary rounded-pill">Apply</button> --}}
        </form>
    </div>
</div>


<script>

</script>
  
@endsection