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
            <div class="col-4 ">
                <div class="card">
                    <div class="card-body">
                        <form class="mr-2" method="post" action="">
                            @csrf
                            <div class="form-group">
                                <label for="my-textarea">Text</label>
                                <textarea id="my-textarea" class="form-control" name="" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>


@endsection
