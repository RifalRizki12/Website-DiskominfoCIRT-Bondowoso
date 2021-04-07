@extends('layouts.frontAdmins.frontAdmin')
@section('title','Data Pengguna - Diskominfo')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Data Admin</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Admin</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div>
                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target="#exampleModal">
                                    <i class="bx bx-smile font-size-16 align-middle mr-2"></i> Tambah
                                </button>
                            </div><br>

                            <table id="datatable-buttons" class="table table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>J.Kelamin</th>
                                    <th>Agama</th>
                                    <th>No Hp</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($data_diri as $data)
                                @if ($data->user->role == 'client')
                                    <tr>
                                        
                                    <td><a href="{{route('profileadmin',[$data->id])}}">{{$data->nama_depan}} {{$data->nama_belakang}}</a></td>
                                    <td>{{$data->jenis_kelamin}}</td>
                                    <td>{{$data->agama}}</td>
                                    <td>{{$data->nohp}}</td>
                                    <td style="text-align: center">
                                        <div class="btn-group btn-group-example" role="group">
                                            {{-- <button type="button" class="btn btn-primary btn-sm w-xs">
                                                <a href="{{route('editClient',[$data->id])}}" style="color: white">
                                                    <i class="mdi mdi-account-edit"> Edit</i>
                                                </a>
                                            </button> --}}
                                            <button type="button" class="btn btn-danger btn-sm w-xs">
                                                <a href="{{route('deleteClient',[$data->id])}}" onclick="return confirm('Yakin')" style="color: white">
                                                    <i class="mdi mdi-account-remove"> Hapus</i>
                                                </a>
                                            </button>
                                        </div>
                                    </td>
                                    </tr>
                                @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Diskominfo.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Develop by Mohammad Rizki A
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('addClient')}}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
  
              <div class="form-group">
                  <label for="">Nama Depan</label>
                  <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{old('nama_depan')}}" required>
              </div>
              <div class="form-group" >
                  <label for="">Nama Belakang</label>
                  <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="{{old('nama_belakang')}}" required>
              </div>
  
              <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}" >
                <label for="">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}" required>
                      @if($errors->has('email'))
                          <span class="help-block">{{$errors->first('email')}}</span>
                      @endif
              </div>
  
              <div class="form-group" >
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                      <option value="Laki-Laki"{{(old('jenis_kelamin') == 'Laki-Laki') ? ' selected' : ''}}>Laki-Laki</option>
                      <option value="Perempuan"{{(old('jenis_kelamin') == 'Perempuan') ? ' selected' : ''}}>Perempuan</option>
                    </select>
              </div>
  
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Alamat</label>
                  <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{old('alamat')}}</textarea>
              </div>
    
              {{-- <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}" >
                  <label for="exampleFormControlTextarea1">Avatar</label>
                  <input type="file" name="avatar" class="form-control">
                  @if($errors->has('avatar'))
                      <span class="help-block">{{$errors->first('avatar')}}</span>
                  @endif  
              </div> --}}
          
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>
        </div>
    </div>
  </div>
</div>

@endsection