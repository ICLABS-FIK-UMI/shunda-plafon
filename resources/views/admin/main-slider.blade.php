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
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="" class="card-title">Add <i class="fas fa-plus"></i></a>
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
                <tr>
                <td><img src="{{('/assets/image/indonesia.png')}}" alt="s"></td>
                <td>/assets/image/indonesia.png</td>
                <td>caption 1</td>
                <td>
                    <a href="">hapus</a>
                    <a href="">edit</a>
                </td>
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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
