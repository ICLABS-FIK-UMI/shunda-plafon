@extends('admin.base')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit </h5><br>
                    <form method="post" action="{{route('')}}">
                        @csrf
                        <div class="form-group">
                            <label for="my-input">Nama User</label>
                        <input id="my-input" class="form-control" type="text" name="nm_user" value="{{$user->nm_user}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                        <input id="alamat" class="form-control" type="text" name="alamat" value="{{$user->alamat}}">
                        </div>
                        <div class="form-group">
                            <label for="nohp">No Hp</label>
                        <input id="nohp" class="form-control" type="number" name="no_hp" value="{{$user->no_hp}}">
                        </div>
                        <button class="btn btn-outline-primary" type="submit">OK</button>

                    </form>
                </div>
            </div>
        </div>


    </div>
@endsection
