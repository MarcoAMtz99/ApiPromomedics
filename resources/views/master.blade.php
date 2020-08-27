<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Webinar. Transformación Digital </title>
		<script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Bootstrap -->
       {{--  <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
       

		<!-- Google Web Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">

		<!-- Template CSS Files  -->
		<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> 
		<link href="{{ asset('js/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ asset('js/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('js/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('img/fav-144.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/fav-114.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/fav-72.png')}}">
		<link rel="apple-touch-icon-precomposed" href="{{asset('images/fav-57.png')}}">
		<link rel="shortcut icon" href="{{asset('images/fav.png')}}">
		
	</head>
    
    
    
    
    
    
    
    
	<body>
	
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('login')}}">
                    {{ 'Sistemawebinar' }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    
    {{-- 
	<!-- Top Bar Starts -->
		<div class="top-bar">
		<!-- Nested Container Starts -->
			<div class="container clearfix text-center-xs">
				<ul class="list-unstyled list-inline pull-left-lg pull-left-md pull-left-sm animation">
						<li><a href="https://www.facebook.com/ByW.soluciones.integrales"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ByWSoluciones"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/byw.si/?hl=es-la"><i class="fa fa-instagram"></i></a></li>
					<!-- 	<li><a href="#"><i class="fa fa-twitter"></i></a></li>   -->
					</ul>
					<p class="pull-right-lg pull-right-md pull-right-sm text-right-lg text-right-md text-right-sm text-light">
						Hacemos que la tecnología trabaje para su empresa.
					</p>
			</div>
		<!-- Nested Container Ends -->
		</div>
	<!-- Top Bar Ends -->
        
    
         --}}
        

	<!-- Main Banner Starts -->
		<section class="main-banner text-center-xs">
		<!-- Nested Container Starts -->
			<div class="container text-lite-color">
                 <h2 class="text-medium"> </h2>
				<h2 class="text-medium">   </h2>
			</div> 
		<!-- Nested Container Ends -->
		</section>
	<!-- Main Banner Ends -->
     
     
   





<!-- Breadcrumb Ends -->	
	<!-- Main Container Starts -->
		<div class="main-container container text-center-xs">
		<!-- Nested Row Starts -->
			<div class="row">
			<!-- Mainarea Starts -->
				<div class="col-sm-8 col-xs-12">
				
				<!-- Contact Form Wrap Starts -->
				

				<!-- Contact Form Wrap Ends -->
				</div>
				<div class="container">

					@yield('content')
				</div>
				<div class="col-12">
					<footer class="copyright">
						<!-- Nested Container Starts -->
							<div class="container text-center text-lite-color">
								<em class="text-light">B&W Soluciones Integrales. @ Derechos Reservados. Diseño de <a href="#">B&W SolucionesIntegrales SA de CV</a></em>
							</div>
						<!-- Nested Container Ends -->
					 </footer>
				</div>
				
    
		
	
	
	<!-- Copyright Ends	-->
	<!-- Template JS Files -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/jquery-migrate-1.4.1.min.js"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/backstretch/jquery.backstretch.min.js"></script>
	<script src="js/plugins/shuffle/jquery.shuffle.modernizr.min.js"></script>
	<script src="js/plugins/owl-carousel/owl.carousel.js"></script>
	<script src="js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
	<script src="js/map.js"></script>	
	<script src="js/custom.js"></script>	
	</body>
    
  
    
    
    
    
    
    
    
    
</html>