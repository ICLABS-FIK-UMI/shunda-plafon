@extends('admin.base')
@section('content')
<div class="content-wrapper">
    <div class="container mt-2">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <img width="700px" src="{{('/mainslider/'.$mainSlider->url)}}" alt="error">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="my-input">Text</label>
                        <input id="my-input" class="form-control" type="text" name="">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection
