<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/logo/logo-diskominfo.png">

    @yield('css')

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/css/skins/yellow.css" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/js/plugins/revolution/css/settings.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/js/plugins/revolution/css/layers.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('tHomes')}}/js/plugins/revolution/css/navigation.css" />

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

<body class="double-diagonal dark">
    <!-- Preloader Starts -->
    {{-- <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="{{asset('tHomes')}}/img/styleswitcher/logos/yellow.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div> --}}
    <!-- Preloader Ends -->
    
    <!-- Page Wrapper Starts -->
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
							<!-- <li class="dropdown">
								<a href="{{route('vidio')}}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-image"></i> Info Video <i class="fa fa-angle-down icon-angle"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{route('vidio')}}">Informasi Video</a></li>
									
								</ul>
							</li> -->
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

        @yield('content')

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
                                {{-- <li>
                                    <a class="facebook" href="#" title="facebook"></a>
                                </li>
                                <li>
                                    <a class="google" href="#" title="google"></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="#" title="linkedin"></a>
                                </li> --}}
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
                <!-- Footer Bottom Area Starts -->
                {{-- <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center"> © 2018 Amira All Rights Reserved | Created with Love by <a href="https://themeforest.net/user/celtano" target="_blank">celtano</a></p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div> --}}
                <!-- Footer Bottom Area Ends -->
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
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{asset('tHomes')}}/js/jquery-2.2.4.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/jquery.easing.1.3.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/jquery.bxslider.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/jquery.filterizr.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Revolution Slider Main JS Files -->
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Revolution Slider Extensions -->

    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{asset('tHomes')}}/js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta/dist/js/bootstrap-select.min.js"></script>


    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('tHomes')}}/js/styleswitcher.js"></script>
    @include('sweetalert::alert')
    <!-- Main JS Initialization File -->
    <script src="{{asset('tHomes')}}/js/custom.js"></script>
    @yield('js')
	
</body>


<!-- Mirrored from slimhamdi.net/amira/demos/index-kenburns.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 18:26:24 GMT -->
</html>