@extends('admin.base')
@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
        </div>
        <form method="post" action="">
            <div class="form-group">
                <label for="my-input">Text</label>
                <input id="my-input" class="form-control" type="text" name="">
            </div>
        </form>
    </div>
@endsection
