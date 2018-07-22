<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}">
        <!-- OR -->
        {!! SEO::generate() !!}
        <link rel="shortcut icon" href="<?php echo @asset('system_images/favicon.png'); ?>" />
        @yield('custom_css')
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <style>
            /* To Dropdown navbar dropdown on hover */
            .navbar-nav > li:hover > .dropdown-menu {
                display: block;
                
            }
            .dropdown-submenu {
                position: relative;
            }
            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                width:250px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }
            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }
            .dropdown-submenu>a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-left-color: #ccc;
                margin-top: 5px;
                
                margin-right: -10px;
            }
            .dropdown-submenu:hover>a:after {
                border-left-color: #fff;
            }
            .dropdown-submenu.pull-left {
                float: none;
            }
            .dropdown-submenu.pull-left>.dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <?php
            $master = DB::table('crediantials')->select('logo')->first();
            $logo = ($master) ? @$master->logo : NULL;
            ?>
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
                            @if($logo)
                            <img src="{{asset('logo/'.@$logo)}}" class="img-responsive">
                            @else
                            TechSquareIndia
                            @endif
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Defence</a>
                                        <?php
                                        $sub_menus = \Illuminate\Support\Facades\DB::table('resources')->where('product_id', 1)->get();
                                        if ($sub_menus) {
                                            ?>
                                            <ul class="dropdown-menu">
                                                @foreach($sub_menus as $field)
                                                <li>
                                                    <a href="{{url('resources/1/'.@$field->id)}}">{{$field->title}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        <?php } ?>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Industrial</a>
                                        <?php
                                        $sub_menus = \Illuminate\Support\Facades\DB::table('resources')->where('product_id', 2)->get();
                                        if ($sub_menus) {
                                            ?>
                                            <ul class="dropdown-menu">
                                                @foreach($sub_menus as $field)
                                                <li>
                                                    <a href="{{url('resources/2/'.@$field->id)}}" >{{$field->title}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        <?php } ?>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others</a>
                                        <?php
                                        $sub_menus = \Illuminate\Support\Facades\DB::table('resources')->where('product_id', 3)->get();
                                        if ($sub_menus) {
                                            ?>
                                            <ul class="dropdown-menu">
                                                @foreach($sub_menus as $field)
                                                <li>
                                                    <a href="{{url('resources/3/'.@$field->id)}}" class="dropdown-toggle" data-toggle="dropdown">{{$field->title}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ url('about_us') }}">About Us</a></li>
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
        @yield('script')
    </body>
</html>