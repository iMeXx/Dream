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
    </head>
<body>
    <div class="wrap">
        <div class="col-md-4" style="padding:0;">
            <div style="background: black;">
                1231231321
                313
                21
                21
                321231232
                13
                21
                321321321
                3213213654
                6846546
            </div>
        </div>
        <div class="col-md-8">
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
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                11111111111111111111111111111111
                00000000000000000000000000000000
            </div>
        </div>
    </footer>

    <!-- script tags
    ============================================================= -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script>
    </script>
</body>
</html>