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
            <div class="col-4">
                <form class="mr-2" method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="my-input">Caption</label>
                        <input id="my-input" class="form-control" type="textarea" name="">
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</div>


@endsection
