<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Hotels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="generator" content="Codeply">

{!! Html::style('css/styles.css') !!}

{!! Html::style('css/animate.min.css') !!}

<!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Ionicons -->
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
            <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> Laravel Hotels</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#one">Login</a>
                </li>
                <li>
                    <a class="page-scroll" href="#two">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                <h2 class="margin-top-0 text-primary">Built On The Bootstrap Grid</h2>
                <br>
                <p class="text-faded">
                    Bootstrap's responsive grid comes in 4 sizes or "breakpoints": tiny (xs), small(sm), medium(md) and large(lg). These 4 grid sizes enable you create responsive layouts that behave accordingly on different devices.
                </p>
                <a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
            </div>
        </div>
    </div>
</section>

</body>
<!--scripts loaded here -->
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.easing.min.js') !!}
{!! Html::script('js/wow.js') !!}
{!! Html::script('js/scripts.js') !!}
</html>