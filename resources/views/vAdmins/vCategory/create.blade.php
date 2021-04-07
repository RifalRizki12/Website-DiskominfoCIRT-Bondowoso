@extends('layouts.frontAdmins.frontAdmin')
@section('title','Kategori - Diskominfo')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
                @endif
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Data</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Caregory</li>
                                <li class="breadcrumb-item active">Tambah Category</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center">Masukkan Category</h4><br><br>
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="{{route('storeCategory')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
        
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-10">
                                                <input name="name" class="form-control" type="text" value="" id="example-text-input" required>
                                            </div>
                                        </div>

                                        <div class="btn-group btn-group-example mb-3" role="group" >
                                            <button type="submit" class="btn btn-primary w-xs "><i class="mdi mdi-content-save">   Simpan</i></button>

                                        </div>
                                </div>

                                    </form>
                

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
        
                            <table id="datatable-buttons" class="table table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Tanggal Edit </th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
        
                                <tbody>
                                @foreach ($category as $show)
                                <tr>   
                                <td>{{$show->id}}</td>
                                <td>{{$show->name}}</td>
                                <td>{{date('j F Y', strtotime($show->updated_at))}}</td>
                                <td style="text-align: center">
                                    <div class="btn-group btn-group-example" role="group">

                                        <button type="button" class="btn btn-primary btn-sm w-xs" >
                                            <a href="{{route('editCategory',[$show->id])}}" style="color: white">
                                                <i class="mdi mdi-account-edit"> Edit</i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm w-xs">
                                            <a href="{{route('deleteCategory',[$show->id])}}" style="color: white" onclick="return confirm('Yakin')">
                                                <i class="mdi mdi-account-remove"> Hapus</i>
                                            </a>
                                        </button>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
