<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login, Diskominfo</title>
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

<body class="double-diagonal dark auth-page">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="/images/logo/logocirt.png" style="max-width: 50%" >
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <div class="container-fluid user-auth">
			<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
				<!-- Logo Starts -->
				<a class="logo" href="{{route('/')}}">
					<img id="single-logo" class="img-responsive" src="/images/logo/logo.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<!-- Slider Starts -->
				<div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
					<!-- Indicators Starts -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-testimonials" data-slide-to="1"></li>
						<li data-target="#carousel-testimonials" data-slide-to="2"></li>
					</ol>
					<!-- Indicators Ends -->
					<!-- Carousel Inner Starts -->
					<div class="carousel-inner">
						<!-- Carousel Item Starts -->
						<div class="item active item-1">
							<div>
								<blockquote>
									<p>Di era serba digital ini kita mesti hati-hati agar terhindar dari kerugian jika berlebihan dalam bermedia-sosial.</p>
									<footer><span>Bijaklah dalam menggunakan sosial media</span></footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-2">
							<div>
								<blockquote>
                  <p> Hoax adalah informasi yang direkayasa untuk menutupi informasi sebenarnya.</p>
									<footer><span>STOP</span>, HOAX</footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
						<!-- Carousel Item Starts -->
						<div class="item item-3">
							<div>
								<blockquote>
                  <p>Scam adalah segala bentuk tindakan yang sudah direncakan yang bertujuan untuk mendapatkan uang dengan cara menipu atau mengakali orang lain. Kalau dipikir-pikir, cara yang demikian adalah cara yang jahat.</p>
									<footer><span>Waspada terhadap kejahatan di dunia maya!</span></footer>
								</blockquote>
							</div>
						</div>
						<!-- Carousel Item Ends -->
					</div>
					<!-- Carousel Inner Ends -->
				</div>
				<!-- Slider Ends -->
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<!-- Logo Starts -->
				<a class="visible-xs" href="{{route('/')}}">
					<img id="logo-mobile-light" class="img-responsive mobile-logo white-l" src="/images/logo/logo.png" style="max-width: 70%" alt="logo">
					<img id="logo-mobile-dark" class="img-responsive mobile-logo dark-l" src="/images/logo/logo.png" style="max-width: 70%" alt="logo">
				</a>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1><span>SILAHKAN</span> LOGIN</h1>
						<p>Masukkan Email dan Password yang sudah terdaftar!</p>
					</div>
					<!-- Main Heading Ends -->
						<!-- Form Starts -->
                        <form class="custom-form" action="{{route('postlogin')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input class="form-control" name="password" id="password" placeholder="PASSWORD" type="password" required>
							</div>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="custom-button login" type="submit">login</button>
								<p class="text-center">Belum Mempunyai Akun ? <a href="{{route('register')}}">Daftar Sekarang</a>
							</div>
							<!-- Submit Form Button Ends -->
						</form>
						<!-- Form Ends -->
					</div>
				</div>
	
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->

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
