@extends('layouts.frontAdmins.frontAdmin')
@section('title','Edit Kategori - Diskominfo')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                <li class="breadcrumb-item active">Admin</li>
                                <li class="breadcrumb-item active">Category</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title" style="text-align: center">Edit Category</h4><br><br>

                            <form action="{{route('updateCategory',[$category->id])}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                        <input name="name" class="form-control" type="text" value="{{$category->name}}" id="name" required>
                                    </div>
                                </div>
                                
                                <div class="btn-group btn-group-example mb-3" role="group">
                                    <button type="submit" class="btn btn-primary w-sm "><i class="mdi mdi-content-save">   Simpan</i></button>
                                    <button type="button" class="btn btn-danger w-sm">
                                        <a href="{{route('createCategory')}}" style="color: white;text-align: center" >
                                            <i class="mdi mdi-close-circle">   Batal</i>
                                        </a>
                                    </button>
                                    
                                </div>
                            </div>

                            </form>

                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection