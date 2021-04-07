@extends('layouts.frontAdmins.frontAdmin')
@section('title','Tambah Posting - Diskominfo')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Tambah Post</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Posting</li>
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
                            <h4 class="card-title" style="text-align: center">Masukkan Posting Blog</h4><br><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{route('up')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
        
                                        <div class="form-group row{{$errors->has('title') ? ' has-error' : ''}}">
                                            <label for="title" class="col-md-2 col-form-label">Judul</label>
                                            <div class="col-md-10">
                                                <input name="title" class="form-control" type="text" value="" id="example-text-input" required>
                                                @if($errors->has('title'))
                                                    <span class="help-block" style="color: red">{{$errors->first('title')}}</span>
                                                @endif 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="category" class="col-md-2 col-form-label">kategori :</label>
                                            <div class="col-md-10">
                                                <select name="category_id" class="form-control">
                                                    <option value="" class="disable selected">Pilih Kategori</option>
                                                    @foreach ($category as $kategori)
                                                        <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="tags" class="col-md-2 col-form-label">Tag :</label>
                                            <div class="col-md-10">
                                                <select name="tags[]" multiple="multiple" class="form-control selectpicker" >
                                                    @foreach ($tags as $tag)
                                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row{{$errors->has('thumbnail') ? ' has-error' : ''}}">
                                            <label for="thumbnail" class="col-md-2 col-form-label">Pilih Gambar</label>
                                            <div class="col-md-10">
                                                <input type="file" name="thumbnail" class="form-control">
                                                @if($errors->has('thumbnail'))
                                                    <span class="help-block" style="color: red">{{$errors->first('thumbnail')}}</span>
                                                @endif 
                                            </div>
                                        </div>

                                        <div class="form-group row{{$errors->has('title') ? ' has-error' : ''}}">
                                            <label for="content" class="col-md-2 col-form-label">Konten</label>
                                            <div class="col-md-10">
                                                <textarea id="editor" name="content" class="form-control" type="text" value=""></textarea>
                                                @if($errors->has('content'))
                                                    <span class="help-block" style="color: red">{{$errors->first('content')}}</span>
                                                @endif 
                                            </div>
                                        </div>
                                        
                                        <div class="btn-group btn-group-example mb-3" role="group">
                                            <button type="submit" class="btn btn-primary w-xs ">Simpan</button>
                                            <button type="button" class="btn btn-danger w-xs">
                                                <a href="{{route('posts')}}" style="color: white;text-align: center" >
                                                    Batal
                                                </a>
                                            </button>
    
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                    </div> <!-- end col -->
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('footer')

@endsection

