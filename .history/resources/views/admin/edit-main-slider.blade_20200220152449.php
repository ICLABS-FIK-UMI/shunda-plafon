@extends('admin.base')
@section('content')
<div class="content-wrapper">
    <div class="container">
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
                    <form method="get" action="">

                    </form>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection
