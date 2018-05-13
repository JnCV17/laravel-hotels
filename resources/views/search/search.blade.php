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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


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
            <h2 class="margin-top-0 text-secundary cursive">Search Hotels</h2>
            <hr class="primary">
            <br>
            {!! Form::open([ 'route' => 'display.index', 'method' => 'GET' ]) !!}
                <div class="input-group">
                    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Search by hotel name or city']) !!}
                    <span class="input-group-btn">
                    {!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
                    </span>
                </div>
                <br>
            {{ Form::radio('radio', true,'rnombre', ['class'=>'radio-inline']) }}<a class="text-secundary"> Search by name </a>
            &nbsp; {{ Form::radio('radio', false,'rciudads'), ['class'=>'radio-inline'] }}<a class="text-secundary"> Search by city</a>
            {!! Form::close() !!}
            <br>
            @if(count($hoteles1) > 0)
                    @if ($hoteles1 -> total() === 1)
                        <a class="font-primary page-scroll" href="#one" style="margin-left: 2%">{{ $hoteles1 -> total() }} record found.</a>
                    @else
                        <a class="font-primary page-scroll" href="#one" style="margin-left: 2%">{{ $hoteles1 -> total() }} records found.</a>
                    @endif
            @endif
        </div>
    </div>
</header>
<section id="one" class="bg-dark">
    @if(count($hoteles1) > 0)
        <div class="fondo-items">
            <div class="container">
                @foreach($hoteles1 as $hotel)
                    <div class="item-box">
                        <div class="row">
                            <div class="col-md-8">
                                <h1>{{ $hotel -> nombre }}</h1>
                                <p class="font-primary">Address: {{ $hotel -> direccion }}<a>
                                        / {{ $hotel -> ciudad }}</a></p>
                                <p class="font-primary"><a id="fondo-azul1"><strong>Rating: {{ $hotel -> estrellas }} /
                                            5</strong></a></p>

                            </div>
                            <div class="col-md-4 verticalLine justify-content-center">
                                <br>
                                <p class="text-center"><strong>Price</strong></p>
                                <p class="text-center font-costo">${{ number_format($hotel -> costo_habitacion, 2, ',', '.') }}</p>

                                <p class="text-center">
                                    <button type="button" class="btn btn-green" onclick="window.location='{{ route('commentarios.show', $hotel-> id)}}'">More ></button>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $hoteles1 -> appends(request()->input())->links() }}
            </div>
            <br>
        </div>
    @else
        <div class="container">
            <br>
            <p class="font-primary">No results found. Try again.</p>
        </div>
    @endif
</section>
<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-3 column">
                <h4>Information</h4>
                <ul class="list-unstyled">
                    <li><a href="">Products</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Benefits</a></li>
                    <li><a href="">Developers</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 column">
                <h4>About</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 column">
                <h4>Stay Posted</h4>
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
                    <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                    <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                    <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                </ul>
            </div>
        </div>
        <br/>
        <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Landing Zero by BootstrapZero</a> ©2015 Company</span>
    </div>
</footer>
<!--scripts loaded here -->
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.easing.min.js') !!}
{!! Html::script('js/wow.js') !!}
{!! Html::script('js/scripts.js') !!}
</body>
</html>