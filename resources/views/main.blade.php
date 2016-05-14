<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Whimsicals by MarDee is a boutique full of beautiful handmade crafts.">

    <title>Whimsicals by MarDee</title>

    <link href="/css/bs_css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/whimsical_style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway|Questrial|Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/basic.css"/>
</head>
<body id="app">

@if(View::hasSection('header'))

    @yield('header')

@else

    <nav class="navbar navbar-default whim_nav">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#whimNav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/">
                    <img src="/img/whim_roses_1.png">
                    <span class="whim_brand">Whimsicals </span> <span> by MarDee</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="whimNav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/" class="active">Home</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/contact">About</a></li>
                    <li><a href="/cart"><i class="fa  fa-shopping-cart "></i> My Cart</a></li>
                    @if(Auth::guest())
                        {{--<li><a href="/login">Login</a></li>--}}
                    @else
                        {{--<li><a>{{ Auth::user()->name }}</a></li>--}}
                        <li><a href="/product/add">Add Product +</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


@endif

<div class="whimsical_wrapper">

    @yield('content')

    @if(View::hasSection('footer'))

        @yield('footer')

    @else

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h5>(801) 500-5000</h5>
                    </div>

                    <div class="col-sm-4">
                        <h4>Whimsicals</h4>
                        <h6>by MarDee</h6>
                    </div>

                    <div class="col-sm-4">
                        <h5>123 Main St Salt Lake City, UT</h5>
                    </div>

                </div>

            </div>
        </footer>

    @endif

    <meta id="token" name="token" value="{{ csrf_token() }}">

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>
    <script src="/js/bs_js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>

    @yield('scripts.footer')

<script>


    $(".thumbnail_img").click(function() {

        var thumbnail_src = $(this).attr('src');

        $('#main_photo').attr("src", thumbnail_src);
    });
</script>

</body>
</html>