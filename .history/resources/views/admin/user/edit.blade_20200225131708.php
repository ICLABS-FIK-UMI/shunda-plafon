@extends('admin.base')
@section('content')
    <div class="content-wrapper">
        @foreach ($user as $users)
        <h1>{{}}</h1>
        @endforeach
    </div>
@endsection
