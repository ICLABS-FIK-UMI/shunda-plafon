@extends('admin.base')
@section('content')
<div class="content-wrapper">
    <div class="container mt-2">
        <div class="card">
        <div class="row">
            <div class="col-8">
                    <div class="card-body">
                        <img width="700px" src="{{('/mainslider/'.$mainSlider->url)}}" alt="error">
                    </div>
            </div>
            <div class="col-4 mt-auto mb-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Content</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>


@endsection
