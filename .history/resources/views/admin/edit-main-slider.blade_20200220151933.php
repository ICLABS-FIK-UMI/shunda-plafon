@extends('admin.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Content</p>
        </div>
    </div>
    <form method="post" action="">
        @csrf
        <img src="{{('/mainslider/'.$mainSlider->url)}}" alt="error">
    </form>
@endsection
