<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/MyStyle.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
        <script src="{{ asset('/js/modernizr.js') }}"></script>
        <script src="{{ asset('/js/my.js') }}"></script>
        <!--[if lt IE 9]>
          <script src="{{ asset('/js/html5shiv.js') }}"></script>
          <script src="{{ asset('/js/respond.min.js') }}"></script>
        <![endif]-->

        @section('head_html')
        @show
        <title>{{ $title }}</title>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            .sidebar{
                background: black;
            }
            .sidebar ul{
                padding-left: 0px;
            }
            .sidebar-head{
                padding: 30px 0 10px;
                text-align: center;
            }
            .sidebar-head h2{
                color: #3eb8ce;
            }
            .sidebar-navbar li{
                
            }
            .sidebar-navbar li:hover{
                background: #3eb8ce;
            }
            .sidebar-navbar li a{
                color: white;
                display: block;
                padding: 10px 50px;
            }
            .sidebar-navbar li a i{
                margin-right: 16px;
            }
            .no-padding{
                padding: 0;
            }
        </style>

    </head>
<body>
    <div class="wrap">
    <div class="row">
        <div class="col-md-2" style="padding:0;">
            <div class="sidebar">
                <header class="sidebar-head">
                    <h2>Cyber Aren@</h2>
                </header>
                <ul class="sidebar-navbar">
                    <li>
                        <a href="{{ url('/pca') }}">
                            <i class="fa fa-globe"></i>
                            <span>Главная</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fa fa-cogs"></i>
                            Профиль
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fa fa-envelope"></i>
                            Сообщения
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fa fa-globe"></i>
                            События
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fa fa-users"></i>
                            Друзья
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/pca/games') }}">
                            <i class="fa fa-gamepad"></i>
                            Игры
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 no-padding">
            <header class="top-header">
                <div class="container">
                    <div class="row">
                        1321321
                    </div>
                </div>
            </header>

            <section class=" text-center">
                <div class="container">
                    <div class="row">
                       1111111111111111111
                    </div>
                </div>
            </section>
            <footer class="footer text-center">
                <div class="container">
                    <div class="row">
                       <br>
                       <br>
                       <br>
                       <br>
                       <br>
                       <br>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>

    

    <!-- script tags
    ============================================================= -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script>
    </script>
</body>
</html>