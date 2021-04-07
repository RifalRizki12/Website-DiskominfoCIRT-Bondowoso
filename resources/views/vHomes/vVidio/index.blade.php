@extends('layouts.frontHomes.frontHomes')
@section('title','Vidio Informasi')
@section('content')
    <!-- Banner Starts -->
    <section class="banner">
        <div class="content text-center">
            <div class="text-center top-text">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1>Video Informasi</h1>
                </div> 
                <!-- Main Heading Ends -->
                <hr>
                <!-- Breadcrumb Starts -->
                <ul class="breadcrumb">
                    <li><a href="{{route('/')}}"> Beranda</a></li>
                    <li>Video Informasi</li>
                </ul>
                <!-- Breadcrumb Ends -->
            </div>
        </div>
    </section>
    <!-- Banner Ends -->
    <!-- Project Starts -->
    <section class="project">
        <div class="container">
            @foreach ($posts as $post)
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col-md-6">
                        <div class="project-main-content videocontainer">
                            <iframe src="{{$post->link}}" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col-md-6">
                        <div class="project-details">
                            <h3>{{$post->title}}</h3>
                            <ul class="unstyled">
                                <li><i class="fa fa-user"></i><span class="detail-name"> Nama </span>: <span class="detail-value">{{$post->user->name}}</span></li>
                                <li><i class="fa fa-calendar"></i><span class="detail-name"> Date </span>: <span class="detail-value">{{$post->getCreatedAttribute2()}}</span></li>
                            </ul>
                            <hr>
                            <p>{!!$post->content!!}</p>
                            <a class="custom-button" target="_BLANK" href="{{$post->link}}">Live preview</a>
                        </div>
                    </div>
                    <!-- Project Details Ends -->
                </div>
                <br><br>
            @endforeach
            {{$posts->links()}}
        </div>
    </section>
    <!-- Project Ends -->
@endsection