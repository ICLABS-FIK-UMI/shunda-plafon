@extends('admin.base')
@section('content')
<div class="content-wrapper">
    <div class="container mt-2">
        <div class="card">
        <div class="row">
            <div class="col-7">

                    <div class="card-body">
                        <img width="600px" src="{{('/mainslider/'.$mainSlider->url)}}" alt="error">
                    </div>
            </div>
            <div class="col-5 mt-auto mb-auto">
                <form class="mr-2 " method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="my-textarea">Caption</label>
                        <textarea id="caption" class="form-control" name="caption" rows="4"></textarea>
                    </div>
                    <button class="btn btn-primary" type="button">OK</button>
                </form>
            </div>
        </div>
    </div>

    </div>
</div>


@endsection
