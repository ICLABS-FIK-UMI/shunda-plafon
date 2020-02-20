@extends('admin.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <img width="300px" src="{{('/mainslider/'.$mainSlider->url)}}" alt="error">
                    <p class="card-text">Content</p>
                </div>
            </div>
            <form method="post" action="">
                @csrf

            </form>
        </div>
    </div>

</div>

@endsection
