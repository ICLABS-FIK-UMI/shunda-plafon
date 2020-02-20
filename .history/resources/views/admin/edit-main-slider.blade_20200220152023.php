@extends('admin.base')
@section('content')
    <div class="card">
        <div class="card-body">
            <img src="{{('/mainslider/'.$mainSlider->url)}}" alt="error">
            <p class="card-text">Content</p>
        </div>
    </div>
    <form method="post" action="">
        @csrf

    </form>
@endsection
