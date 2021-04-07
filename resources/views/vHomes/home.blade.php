@extends('layouts.frontHomes.frontHomes')
@section('title','Beranda - Diskominfo')
@section('content')
<div class="preloader" id="preloader">
    <div class="logopreloader">
        <img src="/images/logo/logocirt.png" style="max-width: 50%" alt="logo-black">
    </div>
    <div class="loader" id="loader"></div>
</div>
        <!-- Main Slider Section Starts -->
        <section class="mainslider" id="mainslider">
            <!-- Slider Hero Starts -->
            <div class="rev_slider_wrapper fullwidthbanner-container dark-slider" data-alias="vimeo-hero" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                <div id="rev_slider_kenburns" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-18" data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{asset('tHomes')}}/img/revolution-slider/kenburns/thumb1.jpg" data-rotate="0" data-saveperformance="off" data-title="Ken Burns" data-description="">
                            <!-- MAIN IMAGE -->
                            <img alt="" src="{{asset('tHomes')}}/img/revolution-slider/kenburns/kenburns1.jpg" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="180" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['70','70','70','45']" data-lineheight="['70','70','70','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-frames='[{"from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">DISKOMINFO
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">INFORMASI BERITA
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                            </div>
                            <!-- LAYER NR. 4 -->
                            @guest
                                <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="{{route('login')}}" class="custom-button slider-button scroll-to-target">Kirim Informasi</a></div>
                            @else
                                <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:100px;sX:1;sY:1;opacity:0;s:2000;e:Power3.easeInOut;" data-transform_out="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-start="750" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" style="z-index: 11; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="{{route('post')}}" class="custom-button slider-button scroll-to-target">Kirim Informasi</a></div>
                            @endguest
                        </li>
                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
            <!-- Slider Hero Ends -->
        </section>
        <!-- Main Slider Section Ends -->
        <!-- About Section Starts -->
        <section id="about" class="about">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Tentang</span> Kami</h1>
                    <h4>DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN BONDOWOSO</h4>
                </div>
                <!-- Main Heading Ends -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- About Content Starts -->
                <div class="row about-content">
                    <div class="col-sm-12 col-md-6 col-lg-6 about-left-side">
                        <h3 class="title-about">WE ARE <strong>DISKOMINFO</strong></h3>
                        <hr>
                        <p>Visi Kabupaten Bondowoso yang dituangkan ke dalam Rencana Pembangunan Jangka Panjang Daerah (RPJPD) Tahun 2005 – 2025 adalah “Mewujudkan Kabupaten Bondowoso Sebagai Kawasan Agribisnis Yang Maju, Religius, Adil dan Makmur”.
                            Visi ini dilaksanakan untuk mencapai tujuan yang selaras dengan tujuan pembangunan nasional yaitu mewujudkan masyarakat yang maju, adil dan makmur; serta tujuan pembangunan Provinsi Jawa Timur yang menitikberatkan pada agribisnis. Untuk mewujudkan Kabupaten Bondowoso yang maju, adil dan makmur dilakukan melalui prioritas pembangunan bidang pertanian dengan tetap melaksanakan kehidupan bernuansa religius.</p>
                        <!-- Tabs Heading Starts -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Misi Kita</a></li>
                            <li><a data-toggle="tab" href="#menu2">Prioritas Pembangunan Daerah</a></li>
                        </ul>
                        <!-- Tabs Heading Ends -->
                        <!-- Tabs Content Starts -->
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>Membangun Kemandirian Ekonomi Bondowoso dengan Memperkuat Sektor Pertanian, Perkebunan, Peternakan serta Sektor lainnya dengan Menggerakkan Ekonomi Kerakyatan maupun Lapangan Kerja,</p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>Pembangunan kualitas keagamaan,Pembangunan kualitas dan cakupan pendidikan,Peningkatan derajat kesehatan masyarakat,Pengentasan kemiskinan melalui pembangunan ekonomi rakyat,</p>
                            </div>
                        </div>
                        <!-- Tabs Content Ends -->
                        <a class="custom-button" href="{{route('about')}}">Lebih Lanjut Tentang Kami</a>
                    </div>
                    <div class="col-md-6 col-lg-6 about-right-side">
                        <div class="full-image-container">
                            <img class="img-responsive hidden-xs" src="/images/logo/about.png" alt="">
                            {{-- <div class="full-image-overlay">
                                <h3>Why <strong>Choose Us</strong></h3>
                                <ul class="list-why-choose-us">
                                    <li>Clean Code & Design</li>
                                    <li>Responsive Layout</li>
                                    <li>Powerful Documentation</li>
                                    <li>Browser Compatibility</li>
                                    <li>Easy Customization</li>
                                    <li>& Much More ...</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- About Content Ends -->
            </div>
            <!-- Container Ends -->
        </section>
        <!-- About Section Ends -->
        <!-- Video Section Starts -->
        <section class="videopromotion">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Video</span> Tutorial Kirim <span>Informasi</span></h1>
                        <h4>Cara penggunaan </h4>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="video-content">
                        <p class="text-center">Jika para pengguna masih belum tau cara untuk mengirim informasi hoaks,phising,scamming(penipuan),<br> Anda bisa menontoh vidio ini terlebih dahulu!</p>
                        <!-- Video Play Starts -->
                        <div class="magnific-popup-gallery">
                            <div class="btn-wrapper text-center"><a class="{{asset('tHomes')}}/image-wrap mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a></div>
                        </div>
                        <!-- Video Play Ends -->
                    </div>
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- Video Section Ends -->
        <!-- Services Section Starts -->
        <section class="services">
            <!-- Container Starts -->
            <div class="container">
                <!-- Main Heading Starts -->
                <div class="text-center top-text">
                    <h1><span>Macam - Macam</span> Informasi penipuan</h1>
                    <h4>Penjelasan</h4>
                </div>
                <!-- Main Heading Starts -->
                <!-- Divider Starts -->
                <div class="divider text-center">
                    <span class="outer-line"></span>
                    <span class="fa fa-cogs" aria-hidden="true"></span>
                    <span class="outer-line"></span>
                </div>
                <!-- Divider Ends -->
                <!-- Services Starts -->
                <div class="row services-box">
                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-money" data-headline="Scam (Penipuan)"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-money">
                            <h2>Scam (Penipuan)</h2>
                            <p>Scam adalah segala bentuk tindakan yang sudah direncakan yang bertujuan untuk mendapatkan uang dengan cara menipu atau mengakali orang lain. Kalau dipikir-pikir, cara yang demikian adalah cara yang jahat.</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-warning" data-headline="Phising"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-warning">
                            <h2>Apa Itu Phishing?</h2>
                            <p>Phising adalah upaya untuk mendapatkan informasi data seseorang dengan teknik pengelabuan.Data yang menjadi sasaran phising adalah data pribadi,data akun (username dan password).
                            </p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                    <!-- Service Item Starts -->
                    <div class="col-lg-4 col-md-6 col-sm-12 services-box-item">
                        <!-- Service Item Cover Starts -->
                        <span class="services-box-item-cover fa fa-hacker-news" data-headline="Berita Hoax"></span>
                        <!-- Service Item Cover Ends -->
                        <!-- Service Item Content Starts -->
                        <div class="services-box-item-content fa fa-hacker-news">
                            <h2>Apa Itu Hoax ?</h2>
                            <p>Hoax adalah sebuah kebohongan atau informasi sesat yang sengaja disamarkan agar terlihat benar . Sedangkan Berita Hoax adalah sebuah publikasi yang terlihat seperti berita faktual , namun ternyata berisi kebohongan dan fitnah .</p>
                        </div>
                        <!-- Service Item Content Ends -->
                    </div>
                    <!-- Service Item Ends -->

                </div>
                <!-- Services Ends -->
            </div>
        </section>
        <!-- Services Section Ends -->

        <!-- Call To Action Section Starts -->
        <section class="call-to-action">
            <div class="section-overlay">
                <!-- Container Starts -->
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>Buat</span> Akun</h1>
                        <h4>Buat Akun Secara Gratis</h4>
                    </div>
                    <!-- Main Heading Starts -->
                    <!-- Call To Action Starts -->
                    <div class="call-to-action-content">
                        <ul>
                            <li>Pendaftaran Akun Gratis</li>
                        </ul>
                        <a class="custom-button" href="{{route('register')}}">Daftar Sekarang</a>
                    </div>
                    <!-- Call To Action Ends -->
                </div>
                <!-- Container Ends -->
            </div>
        </section>
        <!-- facts Section Ends -->
        <!-- Logos Section Starts -->
        <section class="logos">
            <div class="container">
                <ul class="bxslider" id="bxslider">
                    <!-- Logos Items Starts -->
                    <li><img id="3docean" src="/images/logo/logo.png" style="max-width: 100%" alt="3docean"></li>
                    <li><img id="activeden" src="/images/logo/logo.png" style="max-width: 100%" alt="activeden"></li>
                    <li><img id="audiojungle" src="/images/logo/logo.png" style="max-width: 100%" alt="audiojungle"></li>
                    <li><img id="codecanyon" src="/images/logo/logo.png" style="max-width: 100%" alt="codecanyon"></li>
                    <li><img id="graphicriver" src="/images/logo/logo.png" style="max-width: 100%" alt="graphicriver"></li>
                    <li><img id="photodune" src="/images/logo/logo.png" style="max-width: 100%" alt="photodune"></li>
                    <li><img id="themeforest" src="/images/logo/logo.png" style="max-width: 100%" alt="themeforest"></li>
                    <!-- Logos Items Ends -->
                </ul>
            </div>
        </section>
        <!-- Logos Section Ends -->
@endsection
