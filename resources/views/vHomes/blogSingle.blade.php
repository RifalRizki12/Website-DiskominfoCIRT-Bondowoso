{{-- @extends('layouts.frontHomes.frontHomes')
@section('title','Detail Informasi - Diskominfo') --}}
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/amira/demos/blog-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 18:29:05 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Detail Informasi - Diskominfo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/logo/logo1.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/skins/yellow.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('tHomes')}}/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('tHomes')}}/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('tHomes')}}/css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('tHomes')}}/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('tHomes')}}/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('tHomes')}}/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('tHomes')}}/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('tHomes')}}/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('tHomes')}}/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('tHomes')}}/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="{{asset('tHomes')}}/js/modernizr.js"></script>

</head>

<body class="double-diagonal dark blog-page blog-post">

    <div class="wrapper">

        <!-- Header Starts -->
		<header class="header">
			<div class="header-inner">
			  <!-- Navbar Starts -->
			  <nav class="navbar">
				<!-- Logo Starts -->
				<div class="logo">
				  <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="{{route('/')}}">
					<!-- Logo White Starts -->
					<img id="logo-light" class="logo-light" src="/images/logo/logo.png" alt="logo-light" />
					<!-- Logo White Ends -->
					<!-- Logo Black Starts -->
					<img id="logo-dark" class="logo-dark" src="{{asset('tHomes')}}/img/styleswitcher/logos/logos-dark/yellow.png" alt="logo-dark" />
					<!-- Logo Black Ends -->
				  </a>
				</div>
				<!-- Logo Ends -->
				<!-- Toggle Icon for Mobile Starts -->
				<button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span id="icon-toggler">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				  </span>
				</button>
				<!-- Toggle Icon for Mobile Ends -->
				<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
				  <!-- Main Menu Starts -->
				  <ul class="nav navbar-nav" id="main-navigation">
					<li class=""><a href="{{route('home')}}"><i class="fa fa-home"></i> Beranda</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Tentang <i class="fa fa-angle-down icon-angle"></i></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="{{route('about')}}">Tentang Kami</a></li>
						<li><a href="{{route('kontak')}}">Kontak Kami</a></li>
					  </ul>
					</li>
	  
					<li class=""><a href="{{route('vidio')}}"><i class="fa fa-image"></i> Info Video</a></li>

					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> Informasi <i class="fa fa-angle-down icon-angle"></i></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="{{route('post')}}">Kirim Informasi</a></li>
						<li><a href="{{route('blog')}}">Informasi List</a></li>
						<li><a href="{{route('blogGird')}}">Informasi Grid</a></li>
					  </ul>
					</li>
	  
					@guest
                        <li class=""><a href="{{route('register')}}"><i class=""></i> Daftar</a></li>
                        <li class=""><a href="{{route('login')}}"><i class=""></i> Login</a></li>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> Menu <i class="fa fa-angle-down icon-angle"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{route('register')}}">Daftar</a></li>
								<li><a href="{{route('login')}}">Masuk</a></li>
							</ul>
						</li> -->
                    @else
                        <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> Profile <i class="fa fa-angle-down icon-angle"></i></a>
							<ul class="dropdown-menu" role="menu">
	                            <li><a href="#">{{auth()->user()->name}}</a></li>
	                            <li><a href="{{route('logout')}}">Keluar</a></li>
							</ul>
						</li>
                    @endguest
					<!-- Search Icon Starts -->
					<li class="search hidden-xs hidden-sm"><button id="search-button" class="fa fa-search"></button></li>
					<!-- Search Icon Ends -->
				  </ul>
				  <!-- Main Menu Ends -->
				</div>
				<!-- Search Input Starts -->
				<div class="site-search hidden-xs">
					<div class="search-container">
					  <form action="{{route('search')}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input id="search-input" name="search" type="text" placeholder="type your keyword and hit enter ...">
						<span class="close">×</span>
					  </form>
					</div>
				</div>
				<!-- Search Input Ends -->
				<!-- Navigation Menu Ends -->
			  </nav>
			  <!-- Navbar Ends -->
			</div>
		</header>
		<!-- Header Ends -->

        <!-- Banner Starts -->
        <section class="banner banner-blog-post">
            <div class="content text-center">
                <div class="text-center top-text">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1>{{$post->title}}</h1>
                    </div> 
                    <!-- Main Heading Ends -->
                    <hr>
                    <!-- Meta Starts -->
                    <div class="meta">
                        <span><i class="fa fa-user"></i> <a href="#">{{$post->user->name}}</a></span>
                        <span><i class="fa fa-calendar"></i> {{$post->created_at->format('d M Y')}}</span>
                        <span><i class="fa fa-tags"></i> 
                            @foreach ($post->tags as $tag)
                                <a href="#">{{$tag->name}}</a>  
                            @endforeach</span>
                    </div>
                    <!-- Meta Ends -->
                </div>
            </div>
        </section>
        <!-- Banner Ends -->
        
        <!-- Section Content Starts -->
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="content col-xs-12 col-md-8">
                        <!-- Article Starts -->
                        <article>
                            <!-- Figure Starts -->
                            <figure>
                                <a href="#">
                                    <img class="img-responsive" src="{{$post->thumbnail()}}" alt="">
                                </a>
                            </figure>
                            <!-- Figure Ends -->
                            <!-- Content Starts -->
                            <p class="content-article">{!!$post->content!!}</p>
                            <!-- Content Ends -->
                            <!-- Meta Starts -->
                            <div class="meta">
                                <span><i class="fa fa-user"></i> <a href="#">{{$post->user->name}}</a></span>
                                <span><i class="fa fa-calendar"></i>{{$post->created_at->format('d M Y')}}</span>
                                <span><i class="fa fa-tags"></i> 
                                    @foreach ($post->tags as $tag)
                                    {{$tag->name}},
                                    @endforeach
                                </span>
                            </div>
                            <!-- Meta Ends -->
                            <!-- Comments Starts -->
                        {{-- <div class="comments">
                            <h3 class="comments-heading uppercase">Komentar</h3>
                            @foreach ($post->comments as $comment)
                                <ul class="comments-list">
                                    <li>
                                        <!-- Comment Starts -->
                                        <div class="comment">
                                            <img class="comment-avatar pull-left" alt="" src="/images/profile/default.jpg">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">{{$comment->user->name}}</span>
                                                    <span class="comment-date pull-right second-font">{{$comment->created_at->diffForHumans()}}</span>
                                                </div>
                                                <p class="comment-content">
                                                {!!$comment->comment!!}</p>
                                                <div>
                                                    <a class="comment-reply" href="#">Reply</a>
                                                </div>	
                                            </div>
                                        </div>

                                        
                                    </li>
                                </ul> 
                            @endforeach
                            
                            @guest
                            <h3 class="comments-heading add-comment"><a href="{{route('login')}}"> Login Terlebih dahulu</a></h3>
                            @else
                            <h3 class="comments-heading add-comment">Tambah Komentar</h3>
                                <!-- Comments Form Starts -->
                                <div class="custom-form comments-form">
                                    <form action="{{route('buatKomentar',$post->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" id="comment" name="comment" placeholder="COMMENT"  required></textarea>
                                        </div>
                                        <!-- Input Field Ends -->
                                        <!-- Submit Form Button Starts -->
                                        <div class="form-group">
                                            <button class="custom-button" type="submit">submit comment</button>
                                        </div>
                                        <!-- Submit Form Button Ends -->
                                    </form>
                                </div>
                                <!-- Comments Form Ends -->
                            @endguest
                        </div> --}}
                        </article>
                        <!-- Article Ends -->
                    </div>
                    <!-- Sidebar Starts -->
                    <div class="sidebar col-xs-12 col-md-4">
                        <!-- Categories Widget Starts -->
                        <div class="widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="nav nav-tabs">
                                @foreach ($category as $category)
									<li><a href="{{route('categoryShow',[$category->id])}}">{{$category->name}}</a></li>
								@endforeach
                            </ul>
                        </div>
                        <!-- Categories Widget Ends -->
                    
                        <!-- Tags Widget Starts -->
                        <div class="widget widget-tags">
                            <h3 class="widget-title">Popular Tags </h3>
                            <ul class="unstyled clearfix">
                                @foreach ($tags as $tag)
									<li><a href="{{route('tagShow',[$tag->id])}}">{{$tag->name}}</a></li>	
								@endforeach
                            </ul>
                        </div>
                        <!-- Tags Widget Ends -->
                    </div>
                    <!-- Sidebar Ends -->
                </div>
            </div>
        </section>

        <!-- Footer Section Starts -->
		<footer class="footer top-logos">
			<!-- Footer Top Area Starts -->
			<div class="container top-footer">
				<div class="row">
					<!-- Footer Widget Starts -->
					<div class="col-xs-6 col-sm-4 col-md-2">
						<h4>Diskominfo</h4>
						<div class="menu">
							<ul>
								<li><a href="{{route('/')}}">Beranda</a></li>
								<li><a href="{{route('about')}}">Tentang Kami</a></li>
								<li><a href="{{route('blog')}}">Informasi List</a></li>
				<li><a href="{{route('blogGird')}}">Informasi Gird</a></li>
							</ul>
						</div>
					</div>
					<!-- Footer Widget Ends -->
					<!-- Footer Widget Starts -->
					<div class="col-xs-6 col-sm-4 col-md-2">
						<h4>Bantuan</h4>
						<div class="menu">
							<ul>
				<li><a href="{{route('kontak')}}">Kontak</a></li>
								<li><a href="{{route('register')}}">Daftar</a></li>
								<li><a href="{{route('login')}}">Masuk</a></li>
							</ul>
						</div>
					</div>
					<!-- Footer Widget Ends -->
					<!-- Footer Widget Starts -->
					<div class="col-xs-6 col-sm-4 col-md-3">
						<h4>Kontak Kami</h4>
						<div class="menu">
							<ul>
								<li><span><i class="fa fa-envelope-open"></i> diskominfo@bondowosokab.go.id</span></li>
								<li><span><i class="fa fa-phone"></i> 0332 – 421707</span></li>
								<li><span><i class="fa fa-map-marker"></i> Bondowoso , Jl. Letjen Panjaitan No. 234</span></li>
								<li><span><i class="fa fa-clock-o"></i> Sen-jum 08am &#x21FE; 03pm</span></li>
							</ul>
						</div>
					</div>
					<!-- Footer Widget Ends -->
					<!-- Footer Widget Starts -->
					<div class="col-xs-6 col-sm-12 col-md-4">
						
						<!-- Social Media Links Starts -->
						<div class="social-icons">
							<ul class="social">
								<li>
									<a target="_blank" class="social-instagram" href="https://www.instagram.com/kominfobondowoso/" title="instagram"></a>
								</li>
								<li>
									<a target="_blank" class="youtube" href="https://www.youtube.com/c/KominfoBondowoso" title="youtube"></a>
								</li>
							</ul>
						</div>
						<hr>
						<!-- Social Media Links Ends -->
					</div>
					<!-- Footer Widget Ends -->
				</div>
			</div>
			<!-- Footer Top Area Ends -->
	  
		</footer>
		<!-- Footer Section Ends -->
		<!-- Back To Top Starts -->
		<div id="back-top-wrapper">
			<p id="back-top">
				<a href="#top"><span></span></a>
			</p>
		</div>
		<!-- Back To Top Ends -->
    </div>

    <!-- Template JS Files -->
    <script src="{{asset('tHomes')}}/js/jquery-2.2.4.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/jquery.easing.1.3.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/bootstrap.min.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('tHomes')}}/js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="{{asset('tHomes')}}/js/custom.js"></script>

</body>

</html>
