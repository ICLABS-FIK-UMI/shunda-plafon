@extends('admin.base')
@section('content')
    <div class="card">
        <img width="300px" src="{{('/mainslider/'.$mainSlider->url)}}" alt="error">
        <div class="card-body">

            <p class="card-text">Content</p>
        </div>
    </div>
    <form method="post" action="">
        @csrf

    </form>
@endsection
