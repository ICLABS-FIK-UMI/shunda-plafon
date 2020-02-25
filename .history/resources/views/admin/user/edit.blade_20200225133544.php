@extends('admin.base')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit </h5><br>
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="my-input">Nama User</label>
                            <input id="my-input" class="form-control" type="text" name="nm_user">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Email</label>
                            <input id="my-input" class="form-control" type="email" name="email">
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
