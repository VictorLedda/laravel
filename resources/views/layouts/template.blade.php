
<!DOCTYPE html>
<html lang="en">
<head>
<title> Mon application </title>
<meta charset="UTF-8">
<meta name="description" content="laravel">
<meta name="keywords" content="laravel">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="images/favicon.ico" rel="shortcut icon" />

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

<link rel="stylesheet" href="/css/bootstrap.min.css" />
<link rel="stylesheet" href="/css/font-awesome.min.css" />
<link rel="stylesheet" href="/css/magnific-popup.css" />
<link rel="stylesheet" href="/css/style.css" />
<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<!--
<div id="preloder">
<div class="loader"></div>
</div>
-->

<header class="header-section">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-3">
<div class="logo">
<h2 class="site-logo">Riddle</h2>
</div>
</div>
<div class="col-lg-8 col-md-9">
<nav class="main-menu">
<ul>
<li><a href="/">Home</a></li>
<li><a href="/about">About</a></li>
@auth
<li><a href="/songs/create">New</a></li>
@endauth

@guest
                            @if (Route::has('login'))
                                <li class="nav-item right">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item right">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="right"> {{ Auth::user()->name }}

                                    <a href="{{ route('logout') }}"
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
</nav>
</div>
</div>
</div>
<div class="nav-switch">
<i class="fa fa-bars"></i>
</div>
</header>


@yield('content')

<footer class="footer-section text-center">
<div class="container">
<div class="social-links">
<a href=""><span class="fa fa-pinterest"></span></a>
<a href=""><span class="fa fa-linkedin"></span></a>
<a href=""><span class="fa fa-instagram"></span></a>
<a href=""><span class="fa fa-facebook"></span></a>
<a href=""><span class="fa fa-twitter"></span></a>
</div>
<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

</div>
</div>
</footer>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="/js/jquery.js"></script>
<script src="/js/divers.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"60ff4c163bdd0bf9","version":"2020.12.2","si":10}'></script>
</body>
</html>