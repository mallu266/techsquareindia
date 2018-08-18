<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta id="base_url" content="{{ url('admin') }}">
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <style>
            #maintainance{
                padding: 20px;
            }
            .loader {
                border: 16px solid #f3f3f3; /* Light grey */
                border-top: 16px solid #3498db; /* Blue */
                border-radius: 50%;
                width: 120px;
                height: 120px;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
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
                            @guest

                            <li><a href="{{ route('login') }}">Login</a></li>
                            @else
                            <?php
                            $crediantials = DB::table('crediantials')->select('live')->first();
                            $live_status = @$crediantials->live;
                            $status = ($live_status) ? "success" : "warning";
                            ?>
                            <li><div class="text-success" id="maintainance"></div></li>
                            <li><input onclick="return set_status(this)" type="button" style="margin-top: 15px" class="btn btn-{{$status}} btn-xs" value="<?php echo ($live_status == 1) ? "Live" : "Maintainance"; ?>"></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>
        <div id="maintainance_modal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <div class="loader" style="margin: auto"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"></script>
        @yield('script')
        <script>
                                               $base_url = $('#base_url').attr('content');
                                               function set_status(event) {
                                                   $value = event.value;
//                                                   $('#maintainance').html('Please wait we are proceeding...');
                                                   $("#maintainance_modal").modal('show');
                                                   setTimeout(start_process, 2000, $value);
                                               }
                                               var start_process = function ($value) {
                                                   $.ajax({
                                                       url: $base_url + "/maintainance/" + $value,
                                                       type: "GET",
                                                       beforeSend: function () {
                                                       },
                                                       success: function (data) {
                                                           window.location.reload();
                                                       },
                                                       error: function (msg) {
                                                           var res = JSON.parse(msg.responseText);
                                                       },
                                                       complete: function () {

                                                       }
                                                   });
                                               };
        </script>
    </body>
</html>
