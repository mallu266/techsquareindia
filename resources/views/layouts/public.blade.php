<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TechSquare</title>
        <!-- OR -->
        {!! SEO::generate() !!}
        <link rel="shortcut icon" href="<?php echo asset('system_images/favicon.png'); ?>" />
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('system_images/logo.jpg')}}" class="img-responsive" width="200px" height="100px">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;">
                            <!-- Authentication Links -->
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about_us') }}">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    Products<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{url('commercial') }}">
                                            Commercial
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('defence') }}">
                                            Defence
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('industrial') }}">
                                            Industrial
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('contact_us') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php echo date('Y'); ?>
                    </div>
                    <div classs="col-md-8">



                    </div>
                </div>
            </div>
        </footer>
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.cycle2.js') }}"></script>
    </body>
</html>
