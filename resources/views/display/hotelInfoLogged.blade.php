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
            <a class="navbar-brand page-scroll" href="/displayLogged"><i class="ion-ios-analytics-outline"></i> Laravel Hotels</a>
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
                    <a class="page-scroll" href="/searchLogged">Hotels Search</a>
                </li>
                <li>
                    <a class="page-scroll" href="#last">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="https://cdn.woorkup.com/wp-content/uploads/2016/04/gravatar.png"
                             class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="https://cdn.woorkup.com/wp-content/uploads/2016/04/gravatar.png"
                                 class="img-circle" alt="User Image"/>
                            <p style="color: #111;">
                                {!! Auth::user()->name !!}
                                <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a style="color: #111;" href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
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
<section id="one" class="bg-dark">
    <h1 class="margin-top-0 text-secundary cursive text-center">Leave your Comment here</h1>
    <br>
    {!! Form::open(['route'=>'hotelInfoLogged.store', 'method'=>'POST']) !!}
    <div class="fondo-items">
        <div class="container">
            <div class="item-box">
                <div class="row">
                    <div class="col-md-5">
                        <p class="font-tertiary text-center">{{ Auth::user()->name }}</p>
                        <p class="font-primary2 text-center">Leave your comment here</p>
                        {!!  Form::select('estrellas',['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'],  '1', ['class' => 'form-control' ]) !!}
                    </div>
                    <div class="col-md-5">
                        {{ Form::textarea('mensaje', null,['class' => 'form-control', 'placeholder' => 'Leave a comment...', 'size' => '5x4']) }}
                    </div>
                    <div class="col-md-2 text-center">
                        {{ Form::hidden('hotel_inv', $hotel -> id) }}
                        {{ Form::hidden('usr_inv', Auth::user() -> id) }}
                        {!! Form::submit('Send', ['class'=>'btn btn-green2']) !!}
                    </div>
                </div>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            {!! Form::close() !!}
        </div>
        <br>
    </div>
</section>
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