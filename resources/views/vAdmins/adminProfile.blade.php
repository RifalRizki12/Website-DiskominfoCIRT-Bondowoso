@extends('layouts.frontAdmins.frontAdmin')
@section('title','Profile - Diskominfo')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>It will seem like simplified</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{asset('tAdmin')}}/assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <img src="/images/profile/default.jpg" alt="" class="img-thumbnail rounded-circle">
                                    </div>
                                    <h5 class="font-size-15 text-truncate">{{$data->nama_depan}}</h5>
                                    <p class="text-muted mb-0 text-truncate">{{$data->jenis_kelamin}}</p>
                                </div>

                                <div class="col-sm-8">
                                    <div class="pt-4">
                                       
                                        {{-- <div class="row">
                                            <div class="col-6">
                                                <h5 class="font-size-15">125</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="font-size-15">$1245</h5>
                                                <p class="text-muted mb-0">Revenue</p>
                                            </div>
                                        </div> --}}
                                        @if (auth()->user()->datadiri->user_id != auth()->user()->id)
                                            
                                            <div class="mt-4">
                                                <a href="{{route('editAdmin',[$data->id])}}" class="btn btn-primary waves-effect waves-light btn-sm">Edit Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Personal Information</h4>

                            <p class="text-muted mb-4">Hai Nama Saya {{$data->nama_depan}} {{$data->nama_belakang}}, saya lahir pada {{$data->tanggal_lahir}}.</p>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Full Name</th>
                                            <td> : {{$data->nama_depan}} {{$data->nama_belakang}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">TTL</th>
                                            <td> : {{$data->tanggal_lahir}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">No Hp</th>
                                            <td> : {{$data->nohp}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">E-mail</th>
                                            <td> : {{$data->user->email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Alamat</th>
                                            <td> : {{$data->alamat}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                </div>         
                
                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">My Post</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Tgl Post</th>
                                            <th scope="col">Tgl Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            @if ($post->user_id == auth()->user()->id)
                                                <tr>
                                                    <th scope="row">{{$post->id}}</th>
                                                    <td><a target="_blank" href="{{route('site.single.post',$post->slug )}}">
                                                        {!!str_limit($post->title,50)!!}</td>
                                                    </a>
                                                    <td>{{date('j F Y', strtotime($post->created_at))}}</td>
                                                    <td>{{date('j F Y', strtotime($post->updated_at))}}</td>
                                                </tr>
                                            @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script>2021 © Atoi.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Design &amp; Develop by Mohammad Rizki Atoilah
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection