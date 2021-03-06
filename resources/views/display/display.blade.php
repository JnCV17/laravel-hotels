<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Hotels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="generator" content="Codeply">

{!! Html::style('css/styles.css') !!}

<!-- Animate 3.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css">


</head>
<body>
<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/display"><i class="ion-ios-analytics-outline"></i> Laravel Hotels</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="#one">Highlights</a>
                </li>
                <li>
                    <a class="page-scroll" href="#two">Hotels Info</a>
                </li>
                <li>
                    <a class="page-scroll" href="/search">Hotels Search</a>
                </li>
                <li>
                    <a class="page-scroll" href="#last">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header id="header">
    <div class="header-content">
        <div class="inner">
            <h1 class="cursive">Laravel Hotels</h1>
            <h4>A simple Hotels web app created in Laravel</h4>
            <hr>
            <a href="#one" class="btn btn-primary btn-xl page-scroll">Get Started</a>
        </div>
    </div>
</header>
<section class="bg-primary no-padding" id="one">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="images/1.jpg">
                    <img src="images/1.jpg" class="img-responsive" alt="Image 1">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="images/2.jpg">
                    <img src="images/2.jpg" class="img-responsive" alt="Image 2">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="clearfix hidden-lg"> </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="images/3.jpg">
                    <img src="images/3.jpg" class="img-responsive" alt="Image 3">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="images/4.jpg">
                    <img src="images/4.jpg" class="img-responsive" alt="Image 4">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="clearfix hidden-lg"> </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="images/5.jpeg">
                    <img src="images/5.jpeg" class="img-responsive" alt="Image 5">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="images/6.jpeg">
                    <img src="images/6.jpeg" class="img-responsive" alt="Image 6">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="two" class="bg-dark">
    <div class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Registered Hotels</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            @if(count($hoteles) > 0)
                    <div class="container">
                        @foreach($hoteles as $hotel)
                            <div class="item-box">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h1>{{ $hotel -> nombre }}</h1>
                                        <p class="font-primary">Dirección: {{ $hotel -> direccion }}<a>
                                                / {{ $hotel -> ciudad }}</a></p>
                                        <p class="font-primary"><a id="fondo-azul1"><strong>{{ $hotel -> estrellas }} /
                                                    5</strong></a> {{ $hotel -> estrellas }}</p>

                                    </div>
                                    <div class="col-md-4 verticalLine justify-content-center">
                                        <br>
                                        <p class="text-center"><strong>Precio por habitación</strong></p>
                                        <p class="text-center font-costo">${{ number_format($hotel -> costo_habitacion, 2, ',', '.') }}</p>

                                        <p class="text-center">
                                            <button type="button" class="btn btn-green" onclick="window.location='{{ route('hotelInfo.show', $hotel-> id)}}'">Ver más ></button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $hoteles -> appends(request()->input())->links() }}
                    </div>
                    <br>
            @endif
        </div>
    </div>
</section>
<section id="last">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                <hr class="primary">
                <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <form class="contact-form row">
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <textarea class="form-control" rows="9" placeholder="Your message here.."></textarea>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <label></label>
                        <button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-3 column">
                <h4 class="text-secundary">Other Links</h4>
                <ul class="list-unstyled">
                    <li><a href="/home">Administrator Console</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 column">
                <h4 class="text-secundary">About</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 column">
                <h4 class="text-secundary">Stay Posted</h4>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-3 text-right">
                <h4>Follow</h4>
                <ul class="list-inline">
                    <li><a rel="nofollow" href="https://github.com/JnCV17/laravel-hotels" title="Github"><i class="icon-lg ion-social-github-outline"></i></a>&nbsp;</li>
                    <li><a rel="nofollow" href="https://www.facebook.com/JnCV17" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                </ul>
            </div>
        </div>
        <br/>
        <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Laravel Hotels by Juan Villada</a> ©2018</span>
    </div>
</footer>
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img src="" id="galleryImage" class="img-responsive" />
                <p>
                    <br/>
                    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Landing Zero Theme</h2>
                <h5 class="text-center">
                    A free, responsive landing page theme built by BootstrapZero.
                </h5>
                <p class="text-justify">
                    This is a single-page Bootstrap template with a sleek dark/grey color scheme, accent color and smooth scrolling.
                    There are vertical content sections with subtle animations that are activated when scrolled into view using the jQuery WOW plugin. There is also a gallery with modals
                    that work nicely to showcase your work portfolio. Other features include a contact form, email subscribe form, multi-column footer. Uses Questrial Google Font and Ionicons.
                </p>
                <p class="text-center"><a href="http://www.bootstrapzero.com">Download at BootstrapZero</a></p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
            </div>
        </div>
    </div>
</div>
<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Nice Job!</h2>
                <p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
                <p class="text-center"><a href="http://www.bootstrapzero.com">Learn more at BootstrapZero</a></p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
            </div>
        </div>
    </div>
</div>
<!--scripts loaded here -->
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.easing.min.js') !!}
{!! Html::script('js/wow.js') !!}
{!! Html::script('js/scripts.js') !!}
</body>
</html>