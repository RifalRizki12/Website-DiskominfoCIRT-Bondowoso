@extends('layouts.frontAdmins.frontAdmin')
@section('title','Edit Data Admin - Diskominfo')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Edit Data Admin</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Admin</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
                @endif
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title" style="text-align: center">Masukkan Data Admin</h4><br><br>

                            <form action="{{route('updateAdmin',[$admin->id])}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama Depan</label>
                                    <div class="col-md-10">
                                        <input name="nama_depan" class="form-control" type="text" value="{{$admin->nama_depan}}" id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama Belakang</label>
                                    <div class="col-md-10">
                                        <input name="nama_belakang" class="form-control" type="text" value="{{$admin->nama_belakang}}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-10">
                                        <input name="tanggal_lahir" class="form-control" type="date" value="{{$admin->tanggal_lahir}}" id="example-date-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Select</label>
                                    <div class="col-md-10">
                                        <select name="jenis_kelamin" class="form-control">
                                            <option>Jenis Kelamin</option>
                                            <option value="Laki-Laki" @if($admin->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                            <option value="Perempuan" @if($admin->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                @if (auth()->user()->role == 'admin utama')
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Select</label>
                                    <div class="col-md-10">
                                        <select name="role" class="form-control">
                                            <option>Role</option>
                                            <option value="Admin" @if($admin->user->role == 'admin') selected @endif>admin</option>
                                            <option value="admin utama" @if($admin->user->role == 'admin utama') selected @endif>admin utama</option>
                                        </select>
                                    </div>
                                </div>
                                @endif
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Agama</label>
                                    <div class="col-md-10">
                                        <input name="agama" class="form-control" type="text" value="{{$admin->agama}}" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                                    <div class="col-md-10">
                                        <input name="nohp" class="form-control" type="tel" value="{{$admin->nohp}}" id="example-tel-input" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input name="email" class="form-control" type="email" value="{{$admin->user->email}}" id="example-email-input">
                                    </div>
                                </div><br>
                                {{-- <div class="form-group row">
                                    <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="password" placeholder="hunter2" id="example-password-input">
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group row{{$errors->has('avatar') ? ' has-error' : ''}}">
                                    <label for="example-file-input"  class="col-md-2 col-form-label">Avatar</label>
                                    <div class="col-md-10">
                                        <input type="file" name="avatar" class="form-control" >
                                        @if($errors->has('avatar'))
                                            <span class="help-block">{{$errors->first('avatar')}}</span>
                                        @endif 
                                    </div>
                                </div><br> --}}

                                <div class="btn-group btn-group-example mb-3" role="group">
                                    <button type="submit" class="btn btn-primary w-xs "><i class="mdi mdi-content-save">   Simpan</i></button>
                                    <button type="button" class="btn btn-danger w-xs">
                                        <a href="{{route('dataAdmin')}}" style="color: white;text-align: center" >
                                            <i class="mdi mdi-close-circle">   Batal</i>
                                        </a>
                                    </button>
                                    
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