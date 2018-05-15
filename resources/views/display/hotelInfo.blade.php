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
            <a class="navbar-brand page-scroll" href="/"><i class="ion-ios-analytics-outline"></i> Laravel Hotels</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#aboutModal">Login</a>
                </li>
                <li>
                    <a class="page-scroll" href="#aboutModal">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="header-content">
        <div class="inner">
            <h1 class="margin-top-0 text-secundary cursive">{{ $hotel -> nombre }}</h1>&nbsp;<h1 class="margin-top-0 text-secundary cursive">{{ $hotel -> ciudad }}</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <h2 class="margin-top-0 text-secundary cursive">{{ $hotel -> direccion }}</h2>
                        <br>
                        <h2 class="margin-top-0 text-secundary cursive">Rating:</h2>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <h2 class="margin-top-0 text-secundary cursive">${{ number_format($hotel -> costo_habitacion, 2, ',', '.') }}</h2>
                        <br>
                        <h2 class="margin-top-0 text-secundary cursive"><strong>{{ $hotel -> estrellas }}/5</strong></h2>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</header>
<section id="two" class="bg-dark">
    <h1 class="margin-top-0 text-secundary cursive text-center">Comments</h1>
    <br>
    <div class="container">
        @if(count($comentarios) > 0)
            @foreach($comentarios as $comentario)
                <div class="item-box">
                    <div class="row">
                        <div class="col-md-10">
                            <p class="font-primary">{{ $comentario -> contenido }}</p>
                            <p class="font-primary">{{ $comentario -> email }}</p>
                        </div>
                    </div>

                </div>
            @endforeach
        @endif
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
</body>
</html>