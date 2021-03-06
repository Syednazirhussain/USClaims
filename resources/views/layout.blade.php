<!doctype html>
<html lang="en">
<head>
    <!-- Basic -->
    <title>USClaims | Home</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Sulfur - Responsive HTML5 Template">
    <meta name="author" content="Syed Nazir Hussain">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{ asset('sulfur/asset/bootstrap/css/bootstrap.min.css') }}" type="text/css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('sulfur/asset/font-awesome/css/font-awesome.min.css') }}" type="text/css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('sulfur/asset/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sulfur/asset/css/owl.theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sulfur/asset/css/owl.transitions.css') }}" type="text/css">
    
    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('sulfur/asset/css/animate.css') }}">
    
    <!-- Lightbox CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('sulfur/asset/css/lightbox.css') }}">

    <!-- Sulfur CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('sulfur/asset/css/style.css') }}">

    <!-- Responsive CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('sulfur/asset/css/responsive.css') }}">

    @yield('css')

    <script src="{{ asset('sulfur/asset/js/modernizrr.js') }}"></script>
</head>

<body>

    <header class="clearfix">
    
        <!-- Start Top Bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar">
                        <div class="row">
                                
                            <div class="col-md-6">
                                <!-- Start Contact Info -->
                                <ul class="contact-details">
                                    <li><a href="tel:+9545629109"><i class="fa fa-phone"></i> +1 954-562-9109</a>
                                    </li>
                                    <li><a href="mailto:asma@usservice.com"><i class="fa fa-envelope-o"></i> asma@usservice.com</a>
                                    </li> 
                                </ul>
                                <!-- End Contact Info -->
                            </div><!-- .col-md-6 -->
                            
                            <div class="col-md-6">
                                <!-- Start Social Links -->
                                <ul class="social-list">
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-rss"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-flickr"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-skype"></i></a>
                                    </li>
                                </ul>
                                <!-- End Social Links -->
                            </div><!-- .col-md-6 -->
                        </div>
                            
                            
                    </div>
                </div>                        

            </div><!-- .row -->
        </div><!-- .container -->
        <!-- End Top Bar -->
    
        <!-- Start  Logo & Naviagtion  -->
        <div class="navbar navbar-default navbar-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- End Toggle Nav Link For Mobiles -->
                    <a class="navbar-brand" href="{{ url('/') }}">U.S. Claim Services</a>
                </div>
                <div class="navbar-collapse collapse">
                    
                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('services') ? 'active' : '' }}" href="{{ route('services') }}">Service</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                        <!--
                        <li>
                            <a href="javascript:void(0);">Blog</a>
                            <ul class="dropdown">
                                <li>
                                    <a href="javascript:void(0);">Item Page</a>
                                </li>
                            </ul>
                        </li>
                        -->
                        <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
        </div>
        <!-- End Header Logo & Naviagtion -->
    </header>


    @yield('content')

    <!-- Start Footer Section -->
    <section id="footer-section" class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Office Address</span>
                        </h3>
                    </div>
                    
                    <div class="footer-address">
                        <ul>
                            <li class="footer-contact"><i class="fa fa-home"></i>123, Second Street name, Address</li>
                            <li class="footer-contact"><i class="fa fa-envelope"></i><a href="javascript:void(0);">asma@usservice.com</a></li>
                            <li class="footer-contact"><i class="fa fa-phone"></i>+1 954-562-9109</li>
                            <li class="footer-contact"><i class="fa fa-globe"></i><a href="javascript:void(0);" target="_blank">www.domain.com</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3 -->
                
                
                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Latest Tweet</span>
                        </h3>
                    </div>
                    
                    <div class="latest-tweet">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-twitter fa-2x media-object"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">About 15 days ago</h4>
                                <p>Finally #tutsplus start a tutorial on A Beginner???s Guide to Using #joomla . Check it out here http://t.co/i6S4zeW8Z0</p>
                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-3 -->
                
                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Stay With us</span>
                        </h3>
                    </div>
                    <div class="subscription">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail" id="name" required data-validation-required-message="Please enter your name.">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>FLICKR STREAM</span>
                        </h3>
                    </div>
                    
                    <div class="flickr-widget">
                        <ul class="flickr-list">
                            <li>
                                <a href="{{ asset('sulfur/asset/images/portfolio/img1.jpg') }}" data-lightbox="picture-1">
                                    <img src="{{ asset('sulfur/asset/images/portfolio/img1.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('sulfur/asset/images/portfolio/img2.jpg') }}" data-lightbox="picture-2">
                                    <img src="{{ asset('sulfur/asset/images/portfolio/img2.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('sulfur/asset/images/portfolio/img3.jpg') }}" data-lightbox="picture-3">
                                    <img src="{{ asset('sulfur/asset/images/portfolio/img3.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('sulfur/asset/images/portfolio/img4.jpg') }}" data-lightbox="picture-4">
                                    <img src="{{ asset('sulfur/asset/images/portfolio/img4.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('sulfur/asset/images/portfolio/img5.jpg') }}" data-lightbox="picture-5">
                                    <img src="{{ asset('sulfur/asset/images/portfolio/img5.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('sulfur/asset/images/portfolio/img6.jpg') }}" data-lightbox="picture-6">
                                    <img src="{{ asset('sulfur/asset/images/portfolio/img6.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('sulfur/asset/images/portfolio/img1.jpg') }}" data-lightbox="picture-7">
                                    <img src="{{ asset('sulfur/asset/images/portfolio/img1.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('sulfur/asset/images/portfolio/img2.jpg') }}" data-lightbox="picture-8">
                                    <img src="{{ asset('sulfur/asset/images/portfolio/img2.jpg') }}" alt="" class="img-responsive">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--/.col-md-3 -->
            </div><!--/.row -->
        </div><!-- /.container -->
    </section>
    <!-- End Footer Section -->
    
    
    <!-- Start CCopyright Section -->
    <div id="copyright-section" class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="copyright">
                        Copyright ?? {{ date('Y') }}. All Rights Reserved. &nbsp;&nbsp; Design and Developed by <a href="https://my.linkedin.com/in/syed-nazir-hussain-bb4162b8" target="_blank">Syed Nazir Hussain</a>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="copyright-menu pull-right">
                        <ul>
                            <li><a href="javascript:void(0);" class="active">Home</a></li>
                            <li><a href="javascript:void(0);">link 1</a></li>
                            <li><a href="javascript:void(0);">link 2</a></li>
                        </ul>
                    </div>
                </div>
            </div><!--/.row -->
        </div><!-- /.container -->
    </div>
    <!-- End CCopyright Section -->
    
   <!-- Sulfur JS File -->
    <script src="{{ asset('sulfur/asset/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('sulfur/asset/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('sulfur/asset/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sulfur/asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('sulfur/asset/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('sulfur/asset/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('sulfur/asset/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('sulfur/asset/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('sulfur/asset/js/count-to.js') }}"></script>
    <script src="{{ asset('sulfur/asset/js/styleswitcher.js') }}"></script>
    
    {{-- <script src="{{ asset('sulfur/asset/js/map.js') }}"></script> --}}
    {{-- <script src="http://maps.googleapis.com/maps/api/js?&sensor=false"></script> --}}
    {{-- <script src="{{ asset('sulfur/asset/js/script.js') }}"></script> --}}

    @yield('js')

</body>
</html>