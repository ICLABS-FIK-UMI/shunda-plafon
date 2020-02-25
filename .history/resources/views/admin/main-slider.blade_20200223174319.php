@extends('admin.base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Main Slider</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        {{-- <div class="row">
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
      </div> --}}
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Main Slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('admin.mainslider.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="my-input">Caption</label>
                    <input id="my-input" class="form-control" type="text" name="caption">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="{{('/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{('/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{('/adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{('/adminlte/dist/js/demo.js')}}"></script>
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>

@endsection
