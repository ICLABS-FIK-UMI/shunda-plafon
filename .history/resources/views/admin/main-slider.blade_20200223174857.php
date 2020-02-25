@extends('admin.base')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <a href="" class="card-title" data-toggle="modal" data-target="#exampleModal">Add <i class="fas fa-plus"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Gambar</th>
                      <th>Url</th>
                      <th>Caption</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($mainSlider as $slider)
                        <tr>
                            <td><img style="width: 100px" src="{{('/mainslider/'.$slider->url)}}" alt="err"></td>
                            <td>{{$slider->url}}</td>
                            <td>{{$slider->caption}}</td>
                            <td>
                                <a href="{{route('admin.mainslider.destroy',$slider->slug)}}" type="button">hapus</a>
                                <a href="{{route('admin.mainslider.edit',$slider)}}">edit</a>
                            </td>
                        </tr
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
</div>
@endsection
