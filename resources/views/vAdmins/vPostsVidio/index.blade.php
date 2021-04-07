@extends('layouts.frontAdmins.frontAdmin')
@section('title','Posting vidio - Diskominfo')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Postingan Vidio</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Posting Vidio</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
                @endif
                @if (session('update'))
                <div class="alert alert-warning" role="alert">
                    {{session('update')}}
                </div>
                @endif
                @if (session('delete'))
                <div class="alert alert-success" role="alert">
                    {{session('delete')}}
                </div>
                @endif
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="btn-group btn-group-example" role="group">

                                <button type="button" class="btn btn-success btn-xl w-xs">
                                    <a href="addVidio" style="color: white">
                                        <i class="mdi mdi-post"> Tambah  </i>
                                    </a>
                                </button>
                            </div> <br><br>

                            <table id="datatable-buttons" class="table table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Pembuat</th>
                                    <th>TTL Post</th>
                                    <th>TTL Update</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        
                                        <td>{{$post->id}}</td>
                                        <td>
                                            <a target="_blank" href="{{route('vidio')}}">
                                                {{str_limit($post->title,30)}}
                                            </a>
                                        </td>
                                        <td>{{$post->user->name}}</td>
                                        <td>{{$post->getCreatedAttribute2()}}</td>
                                        <td>{{$post->getUpdatedAttribute2()}}</td>
                                        <td style="text-align: center">
                                            <div class="btn-group btn-group-example" role="group">
                                            
                                                <button type="button" class="btn btn-primary btn-sm w-xs">
                                                    <a href="{{route('editPostVidio',[$post->id])}}" style="color: white">
                                                        <i class="mdi mdi-account-edit"> Edit</i>
                                                    </a>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm w-xs">
                                                    <a href="{{route('deletePostVidio',[$post->id])}}" style="color: white" onclick="return confirm('Yakin')">
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
@endsection