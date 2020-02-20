@extends('admin.base')
@section('content')
    <form method="post" action="">
        @csrf
    <img src="{{('/mainslider/'.$mainSlider->url)}}" alt="error">
    </form>
@endsection
