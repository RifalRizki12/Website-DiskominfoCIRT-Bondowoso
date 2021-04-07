@extends('layouts.frontHomes.frontHomes')
@section('title','Kirim Informasi')
@section('content')
<!-- Banner Starts -->
<section class="banner">
    <div class="content text-center">
        <div class="text-center top-text">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1>Kirim Informasi</h1>
            </div> 
            <!-- Main Heading Ends -->
            <hr>
            <!-- Breadcrumb Starts -->
            <ul class="breadcrumb">
                <li><a href="index-kenburns.html"> home</a></li>
                <li>Kirim Informasi</li>
            </ul>
            <!-- Breadcrumb Ends -->
        </div>
    </div>
</section>
<!-- Banner Ends -->
<!-- Shopping Checkout Section Starts -->
<section class="shop-checkout">
    <!-- Billing Details Starts -->
    <div class="container">
        <div class="row">
            @if (session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="col-xs-12">
                <h3>Informasi Details</h3>
                <form class="row custom-form" action="{{route('kirim')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!-- Input Field Starts -->
                    <div class="col-xs-12 ">
                        <div class="form-group">
                            <input type="text" name="title" placeholder="Judul" class="form-control">
                        </div>
                    </div>
                    <!-- Input Field Ends -->
                    
                    <!-- Input Field Starts -->
                    <div class="col-xs-12">
                        <div class="form-group">
                            <select name="category_id" class="form-control">
                                <option value="" class="disable selected">Pilih Kategori</option>
                                @foreach ($category as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <!-- Input Field Ends -->

                    <div class="col-xs-12 ">
                        <div class="form-group{{$errors->has('thumbnail') ? ' has-error' : ''}}">
                            <input type="file" name="thumbnail" class="form-control"  style="background-color: #333;border:1px solid #444;color:#fff">
                            @if($errors->has('thumbnail'))
                                <span class="help-block" style="color: white">{{$errors->first('thumbnail')}}</span>
                            @endif 
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group{{$errors->has('title') ? ' has-error' : ''}}">
                            <textarea name="content" placeholder="Konten" class="form-control"></textarea>
                        </div>
                        @if($errors->has('content'))
                            <span class="help-block" style="color: white">{{$errors->first('content')}}</span>
                        @endif 
                    </div>
                    <!-- Input Field Ends -->
                    
                    <button type="submit" class="custom-button send-button">Kirim</button>
                </form>
            </div>
        </div>
    <!-- Billing Details Ends -->
</section>   
@endsection