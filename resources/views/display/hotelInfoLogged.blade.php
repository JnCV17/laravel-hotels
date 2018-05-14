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
                    <a class="page-scroll" href="/search">Hotels Search</a>
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
<section id="one" class="bg-dark">
    <br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="title">{{ $hotel -> nombre }}</p>
                    <p class="font-secondary">{{ $hotel -> ciudad }}</p>
                    <br>
                    <p class="font-secondary">{{ $hotel -> direccion }}</p>
                    <p class="font-secondary">{{ $hotel -> estrellas }}</p>
                </div>
                <div class="col-md-4">
                    <br>
                    <p class="text-center font-costo2">${{ number_format($hotel -> costo_habitacion, 2, ',', '.') }}</p>
                    <br>
                    <p class="font-primary text-right"><a id="fondo-azul1"><strong>{{ $hotel -> calificacion }} /
                                5</strong></a></p>
                </div>
            </div>
        </div>
        <br>
    {!! Form::open(['route'=>'hotelInfoLogged.store', 'method'=>'POST']) !!}
    <div class="fondo-items">
        <div class="container">
            <div class="item-box">
                <div class="row">
                    <div class="col-md-5">
                        <p class="font-tertiary text-center">{{ Auth::user()->name }}</p>
                        <p class="font-primary2 text-center">¿Conoces este hotel? Calificalo.</p>
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
            <div class="container">
                @if(count($comentarios) > 0)
                    @foreach($comentarios as $comentario)
                        <div class="item-box">
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="font-primary">{{ $comentario -> contenido }}</p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <br>
    </div>
</section>