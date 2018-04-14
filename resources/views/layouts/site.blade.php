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

        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">




        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
        <script src="{{ asset('/js/modernizr.js') }}"></script>
        <script src="{{ asset('/js/my.js') }}"></script>



        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
    <!-- Wrapper -->
        <div id="wrapper">
            <!-- Main -->
                <div id="main">
                    <div class="inner">
                        <!-- Header -->
                            <header id="header">
                                <a href="index.html" class="logo"><strong>CPA</strong> CyberProfArena</a>
                                <ul class="icons">
                                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                    <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                    <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
                                </ul>
                            </header>

                        <!-- Banner -->
                            <section id="banner">
                                <div class="content">
                                    <header>
                                        <h1>Hi, I’m Editorial<br />
                                        by HTML5 UP</h1>
                                        <p>A free and fully responsive site template</p>
                                    </header>
                                    <p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
                                    <ul class="actions">
                                        <li><a href="#" class="button big">Learn More</a></li>
                                    </ul>
                                </div>
                                <span class="image object">
                                    <img src="images/pic10.jpg" alt="" />
                                </span>
                            </section>

                        <!-- Section -->
                            <section>
                                <header class="major">
                                    <h2>Erat lacinia</h2>
                                </header>
                                <div class="features">
                                    <article>
                                        <span class="icon fa-diamond"></span>
                                        <div class="content">
                                            <h3>Portitor ullamcorper</h3>
                                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        </div>
                                    </article>
                                    <article>
                                        <span class="icon fa-paper-plane"></span>
                                        <div class="content">
                                            <h3>Sapien veroeros</h3>
                                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        </div>
                                    </article>
                                    <article>
                                        <span class="icon fa-rocket"></span>
                                        <div class="content">
                                            <h3>Quam lorem ipsum</h3>
                                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        </div>
                                    </article>
                                    <article>
                                        <span class="icon fa-signal"></span>
                                        <div class="content">
                                            <h3>Sed magna finibus</h3>
                                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        </div>
                                    </article>
                                </div>
                            </section>

                        <!-- Section -->
                            <section>
                                <header class="major">
                                    <h2>Ipsum sed dolor</h2>
                                </header>
                                <div class="posts">
                                    <article>
                                        <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
                                        <h3>Interdum aenean</h3>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">More</a></li>
                                        </ul>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
                                        <h3>Nulla amet dolore</h3>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">More</a></li>
                                        </ul>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                                        <h3>Tempus ullamcorper</h3>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">More</a></li>
                                        </ul>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                                        <h3>Sed etiam facilis</h3>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">More</a></li>
                                        </ul>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                                        <h3>Feugiat lorem aenean</h3>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">More</a></li>
                                        </ul>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                                        <h3>Amet varius aliquam</h3>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                        <ul class="actions">
                                            <li><a href="#" class="button">More</a></li>
                                        </ul>
                                    </article>
                                </div>
                            </section>

                    </div>
                </div>
            <!-- Sidebar -->
                <div id="sidebar" class="myBg">
                    <div class="inner">

                        <!-- Search -->
                            <section id="search" class="alt myBg">
                                <form method="post" action="#">
                                    <input type="text" name="query" id="query" placeholder="Search" />
                                </form>
                            </section>

                        <!-- Menu -->
                            <nav id="menu">
                                <ul>
                                    <li><a href="/">Главная</a></li>
                                    <li><a href="/">Профиль</a></li>
                                    <li><a href="/">Сообщения</a></li>
                                    <li><a href="/">События</a></li>
                                    <li>
                                        <span class="opener">Submenu</span>
                                        <ul>
                                            <li><a href="#">Lorem Dolor</a></li>
                                            <li><a href="#">Ipsum Adipiscing</a></li>
                                            <li><a href="#">Tempus Magna</a></li>
                                            <li><a href="#">Feugiat Veroeros</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Etiam Dolore</a></li>
                                    <li><a href="#">Adipiscing</a></li>
                                    <li>
                                        <span class="opener">Another Submenu</span>
                                        <ul>
                                            <li><a href="#">Lorem Dolor</a></li>
                                            <li><a href="#">Ipsum Adipiscing</a></li>
                                            <li><a href="#">Tempus Magna</a></li>
                                            <li><a href="#">Feugiat Veroeros</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Maximus Erat</a></li>
                                    <li><a href="#">Sapien Mauris</a></li>
                                    <li><a href="#">Amet Lacinia</a></li>
                                </ul>
                            </nav>

                        <!-- Section -->
                            <section>
                                <header class="major">
                                    <h2>Ante interdum</h2>
                                </header>
                                <div class="mini-posts">
                                    <article>
                                        <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                                    </article>
                                    <article>
                                        <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                                    </article>
                                </div>
                                <ul class="actions">
                                    <li><a href="#" class="button">More</a></li>
                                </ul>
                            </section>

                        <!-- Section -->
                            <section>
                                <header class="major">
                                    <h2>Get in touch</h2>
                                </header>
                                <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                <ul class="contact">
                                    <li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
                                    <li class="fa-phone">(000) 000-0000</li>
                                    <li class="fa-home">1234 Somewhere Road #8254<br />
                                    Nashville, TN 00000-0000</li>
                                </ul>
                            </section>

                        <!-- Footer -->
                            <footer id="footer">
                                <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                            </footer>
                    </div>
                </div>

        </div>

    

    <!-- script tags
    ============================================================= -->
    <!-- Scripts -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/skel.min.js') }}"></script>
    <script src="{{ asset('/js/util.js') }}"></script>
    <!--[if lte IE 8]><script src="{{ asset('/js/ie/respond.min.js') }}"></script><![endif]-->
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>