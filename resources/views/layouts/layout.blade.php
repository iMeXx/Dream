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
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row">
				<!-- nav starts here -->
				<div class="col-md-12">					
					<nav class="navbar navbar-default">
						<div class="container-fluid nav-bar">
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a href="{{ url('/') }}"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
						    </div>
						    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav navbar-right">
						        <li><a href="#home">Главная</a></li>
						        <li><a href="#features">Особенности</a></li>
						        <li><a href="#about">About</a></li>
						        <li><a href="#contact">Контакты</a></li>
						      </ul>
						    </div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header><!-- end of header section -->

	<!-- banner section starts here -->
	<section class="banner" id="home">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 wow fadeInLeft animated">
					<h3>стань профи в месте с нами</h3>
					<h1>Заяви о себе</h1>
					<p>Играй в игры, ищи напарников, делись достижениями и захватывающими моментами.</p>
					@if (Auth::guest())
						<button class="download-btn" id="register_btn">Регистрация</button>
						<button class="features-btn" id="login_btn">Войти</button>
					@endif
				</div>
				<div class="col-xs-6 banner-img wow fadeInRight animated">
					<img class="img-responsive" src="img/games0.png" alt="">
				</div>
			</div>
		</div>
	</section><!-- end of banner section -->

	<!-- feature sectiona -->
	<section class="features text-center" id="features">
		<div class="container">
			<div class="row">
				<h4>обзор продукта</h4>
				<h2>Список особенностей</h2>
				<img class="img-responsive" src="img/daag.png" alt="">
				<div class="col-md-3 wow zoomIn animated">
					<i class="fa fa-desktop"></i>
					<h3>Удобство</h3>
					<p>Удобство в использовании на любом устройстве.</p>
				</div>
				<div class="col-md-3 wow zoomIn animated">
					<i class="fa fa-cog"></i>
					<h3>Настройки</h3>
					<p>Огромное количество настроек.</p>
				</div>
				<div class="col-md-3 wow zoomIn animated">
					<i class="fa fa-facebook"></i>
					<h3>Поддержка</h3>
					<p>Поддержка в любой социальной сети.</p>
				</div>
				<div class="col-md-3 wow zoomIn animated">
					<i class="fa fa-mobile"></i>
					<h3>Приложение</h3>
					<p>Будет доступно в скором будущем.</p>
				</div>
			</div>
		</div>
	</section><!-- end of features section -->
	<hr>
	<!-- details section -->
	<section class="details" id="about">
		<div id="about_fon">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-xs-6 col-sm-6 wow slideInUp animated">
						<img class="img-responsive details-phone" src="img/all_ustr.png" alt="">
					</div>
					<div class="col-md-6 col-md-offset-1 col-xs-6 col-sm-6 wow slideInUp animated">
						<h2>Красиво на каждом устройстве</h2>
						<p></p>
						<ul>
							<li><i class="fa fa-mobile"></i>Адаптивный дизайн</li>
							<li><i class="fa fa-bolt"></i>Быстрая загрузка</li>
							<li><i class="fa fa-tachometer"></i>Тонны функций и удобство использования</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of details section -->

	<!-- contact section -->
	<section class="contact text-center" id="contact">
		<div class="container">
			<div class="row">
				<div class="contact-heading">
					<br/><br/>
					<h2>связаться с нами</h2>
				</div>
				<div class="col-md-2 col-md-offset-1 col-xs-4 col-sm-4">
					<i class="fa fa-phone"></i>
					<p>+7 (938) 1-048-048</p>
				</div>
				<div class="col-md-2 col-md-offset-2 col-xs-4 col-sm-4">
					<i class="fa fa-map-marker"></i>
					<p>Ростов-на-Дону</p>
				</div>
				<div class="col-md-2 col-md-offset-2 col-xs-4 col-sm-4 clearfix">
					<i class="fa fa-envelope-o"></i>
					<p>zimovec.maks@gmail.com</p>
				</div>
				<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
					<article class="contact-form">
						<form action="contact">
							<div class="col-md-5 col-md-offset-1 contact-form-left">
								<input class="name" type="text" placeholder="ИМЯ*">
								<input class="email" type="email" placeholder="ПОЧТА*">
								<input class="subject" type="text" placeholder="ТЕМА*">
							</div>
							<div class="col-md-5 contact-form-right text-right">
								<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="СООБЩЕНИЕ"></textarea>
								<input type="submit" class="submit-btn" value="отправить">
							</div>
						</form>
					</article>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->

	<!-- google map api -->
	<div class="map">
		<div class="container-fluid">
			<div class="row">
				<div id="map"></div> <!-- api map -->
			</div>
		</div>
	</div>
		
	<!-- footer starts here -->
	<footer class="footer text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="icons">
						<a href=""><i class="fa fa-behance"></i></a>
						<a href=""><i class="fa fa-dribbble"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-linkedin"></i></a>
					</div>
					<p>COPYRIGHT &copy; 2018 cybersportmen</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- login form -->
	<section class="popur_bg">
		<div class="login_block">
			<div class="close">&#10008;</div>
			<form method="post" action="{{ route('login') }}" class="login">
				{{ csrf_field() }}
				<p>
				  <label for="login">Логин:</label>
				  <input type="text" name="login" id="login" value="name@example.com">
				</p>

				<p>
				  <label for="password">Пароль:</label>
				  <input type="password" name="password" id="password" value="4815162342">
				</p>

				<p class="login-submit">
				  <button type="submit" class="login-button">Войти</button>
				</p>

				<p class="forgot-password"><a href="index.html">Забыл пароль?</a></p>
			</form>
		</div>
	</section>
	<!-- register form -->
	<section>
		<div class="popur_bg2"></div>
		<div class="register_block">
			<div class="close">&#10008;</div>
			<form method="post" action="{{ route('register') }}" class="login" style="margin: 75px auto;">
				{{ csrf_field() }}
				<p>
				  <label for="name">Имя:</label>
				  <input type="text" name="name" id="name" value="{{ old('name') }}">
				</p>
				<p>
				  <label for="email">E-Mail:</label>
				  <input type="email" name="email" id="email" value="name@example.com">
				</p>
				@if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
				<p>
				  <label for="password_reg">Пароль:</label>
				  <input type="password" name="password" id="password_reg" value="4815162342">
				</p>
				<p>
				  <label for="password-с">Повторите:</label>
				  <input type="password" name="password_confirmation" id="passwor-с" value="4815162342">
				</p>
				<p class="login-submit">
				  <button type="submit" class="login-button">Войти</button>
				</p>
			</form>
		</div>
	</section>
	<!-- script tags
	============================================================= -->
	<script src="{{ asset('/js/smoothscroll.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/custom.js') }}"></script>
	<script src="{{ asset('/js/wow.js') }}"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{ asset('/js/gmaps.js') }}"></script>
	<script>
		var map;
		function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
		  center: {lat: 47.226, lng: 39.704}, 
		  zoom: 11
		});
		}
		var login, register;

		login = $("#login_btn");
		register = $("#register_btn");

		login.click(function(){
			$('.popur_bg').css('display','block');

			var window_H = $( window ).height();
			$('.login_block').css('margin_top', window_H+'px');
		});

		$('.popur_bg').click(function(){
			$('.popur_bg').css('display','none');
			$('.login_block').css('display','none');
		});
		$('.close').click(function(){
			$('.popur_bg').css('display','none');
			$('.login_block').css('display','none');
		});


		register.click(function(){
			$('.popur_bg2').css('display','block');
			$('.register_block').css('display','block');
			var window_H = $( window ).height();
			$('.register_block').css('margin_top', window_H+'px');
		});
		$('.popur_bg2').click(function(){
			$('.popur_bg2').css('display','none');
			$('.register_block').css('display','none');
		});
		$('.close').click(function(){
			$('.popur_bg2').css('display','none');
			$('.register_block').css('display','none');
		});
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAhzPdntTNaL7AoPevRqigGBRpWB2xhzk&callback=initMap" async defer></script>
</body>
</html>