@extends('layouts.frontAdmins.frontAdmin')
@section('title','Edit Data Pengguna - Diskominfo')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Edit Data Pengguna</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Pengguna</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title" style="text-align: center">Masukkan Data Pengguna</h4><br><br>

                            <form action="{{route('updateClient',[$client->id])}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama Depan</label>
                                    <div class="col-md-10">
                                        <input name="nama_depan" class="form-control" type="text" value="{{$client->nama_depan}}" id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama Belakang</label>
                                    <div class="col-md-10">
                                        <input name="nama_belakang" class="form-control" type="text" value="{{$client->nama_belakang}}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-10">
                                        <input name="tanggal_lahir" class="form-control" type="date" value="{{$client->tanggal_lahir}}" id="example-date-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Select</label>
                                    <div class="col-md-10">
                                        <select name="jenis_kelamin" class="form-control">
                                            <option>Jenis Kelamin</option>
                                            <option value="Laki-Laki" @if($client->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                            <option value="Perempuan" @if($client->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Agama</label>
                                    <div class="col-md-10">
                                        <input name="agama" class="form-control" type="text" value="{{$client->agama}}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                                    <div class="col-md-10">
                                        <input name="nohp" class="form-control" type="tel" value="{{$client->nohp}}" id="example-tel-input" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input name="email" class="form-control" type="email" value="{{$client->user->email}}" id="example-email-input">
                                    </div>
                                </div><br>

                                {{-- <div class="form-group row{{$errors->has('avatar') ? ' has-error' : ''}}">
                                    <label for="example-file-input"  class="col-md-2 col-form-label">Avatar</label>
                                    <div class="col-md-10">
                                        <input type="file" name="avatar" class="form-control" >
                                        @if($errors->has('avatar'))
                                            <span class="help-block">{{$errors->first('avatar')}}</span>
                                        @endif 
                                    </div>
                                </div> --}}

                                <div class="btn-group btn-group-example mb-3" role="group">
                                    <button type="submit" class="btn btn-primary w-xs"><i class="mdi mdi-content-save">   Simpan</i></button>
                                    <button type="button" class="btn btn-danger w-xs"> <a style="color: white" href="{{ URL::previous() }}"><i class="mdi mdi-close-circle">   Kembali</i></a></button>
                                </div>
                            </form>
                        </div>



                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection