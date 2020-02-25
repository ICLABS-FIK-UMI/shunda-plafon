@extends('admin.base')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>User</h1>
            </div>

          </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">

        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-header">
                  <a href="" class="card-title" data-toggle="modal" data-target="#exampleModal">Add <i class="fas fa-plus"></i></a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama User</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>No HP</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach ($user as $users)
                            <tr>
                                <td></td>
                                <td>{{$users->nm_user}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->address}}</td>
                                <td>{{$users->no_hp}}</td>
                                <td>
                                    {{-- <a href="{{route('admin.user.destroy',$users->id)}}" type="button">hapus</a>
                                    <a href="{{route('admin.user.edit',$users)}}">edit</a> --}}
                                </td>
                            </tr>
                            <?php $no++ ?>
                            @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
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
                <form method="post" action="{{route('admin.user.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="my-input">Nama User</label>
                        <input id="my-input" class="form-control" type="text" name="nm_user">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Email</label>
                        <input id="my-input" class="form-control" type="text" name="email">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Nama User</label>
                        <input id="my-input" class="form-control" type="text" name="nm_user">
                    </div>
                    <div class="form-group">
                        <label for="my-input">Address</label>
                        <input id="my-input" class="form-control" type="text" name="address">
                    </div>
                    <div class="form-group">
                        <label for="my-input">No Hp</label>
                        <input id="my-input" class="form-control" type="text" name="no_hp">
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
</div>
</div>
@endsection
