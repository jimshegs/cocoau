<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>


		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="author" content="olawaleogunjimi@gmail.com">


		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
		<!-- Include roboto.css to use the Roboto web font, material.css to include \
		the theme and ripples.css to style the ripple effect -->
		<!--<link href="/css/roboto.min.css" rel="stylesheet">-->
		<!-- <link href="/css/material.min.css" rel="stylesheet"> -->
		<!--<link href="/css/ripples.min.css" rel="stylesheet">-->




		<!-- Favicon -->
		
		<link rel="shortcut icon" href="/images/logo.png">

		<!-- Web Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext" rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

		<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}"> -->

		@yield('style')
		<!-- Font Awesome CSS -->
		<link href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

		<!-- Plugins -->
		<link href="{{ asset('css/animations.css') }}" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">

		<!-- Custom css -->
		<link href="{{ asset('css/custom.css')}}" rel="stylesheet">

		<!-- Compiled Css -->
		<!--<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">-->

		
	</head>

	<body class="no-trans">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="/images/logo.png" alt="cocoau"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">Church of Christ</a></div>
								<div class="site-slogan">Obafemi Awolowo University</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="/">Home</a></li>
												<li><a href="/about">About</a></li>
												<li><a href="/blog">Blog</a></li>
												<li><a href="/gallery">Gallery</a></li>
												<!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <span class="caret"></span></a>
													<ul class="dropdown-menu">
														<li><a href="/blog">Blog</a></li>
														<li><a href="/sermons">Sermons</a></li>
														<li><a href="/gallery">Gallery</a></li>
													</ul>
												</li> -->
												<li><a href="/stewards">Stewards</a></li>
												<li><a href="/contact">Contact</a></li>
												<!-- <li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">Member <span class="caret"></span></a>
													<ul class="dropdown-menu">
														@if(Auth::check())
															@if(Auth::user()->hasRole('manager'))
																<li><a href="/admin">Admin</a></li>
															@endif
															<li><a href="/logout">Logout</a></li>
														@else
														<li><a href="/register">Register</a></li>
														<li><a href="/login">Login</a></li>
														@endif
													</ul>
												</li> -->

												<!-- logo -->
												<div class="logo smooth-scroll">
													<a href="http://oauife.edu.ng"><img id="logo" src="/images/oaulogo.png" alt="oau"></a>
												</div>

												<!-- <div class="button" style="position:absolute; right:-100px; top:20px; color:black">
													<span>
														<a href="#" title="TOUCH A LIFE" data-toggle="popover" data-placement="bottom" data-trigger="focus" data-content="Account Name: CHURCH OF CHRIST, OAU         Account Number: 1014117509 
														Bank: SKYE BANK NIGERIA, PLC"><b>DONATE</b></a>
													</span>
												</div> -->
											</ul>


										</div>
									
									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->
		
		@yield('page-header')
		@yield('content')
		<!-- footer start -->
		<!-- ================ -->
		
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
		<!--	<div class="footer section">
				<div class="container"> -->
			<div class="section translucent-bg bg-image-2 pb-clear">
				<div class="container object-non-visible" data-animation-effect="fadeIn">
					<div class="row">
						<div class="col-md-4 col-sm-4 widget footer-widget">
							<h3 class="title text-left" id="name"><b>CHURCH OF CHRIST OAU</b></h3>
							<hr align="left" width="75%">
							<div class="spacer-20"></div>
							<p class="large" style="width: 75%">Love is the womb in which Christ can be formed in us.</p>
							<ul class="list-icons">
								<li><i class="fa fa-phone pr-10"></i> +2348031352102</li>
								<li><i class="fa fa-envelope-o pr-10"></i>oaucoc@gmail.com</li>
							</ul>
							<ul class="social-links">
								<li class="facebook"><a href="https://facebook.com/oaucoc/"><i class="fa fa-facebook" style="color:#6495ED"></i></a></li>
								<li class="twitter"><a href="https://twitter.com/oaucoc/"><i class="fa fa-twitter" style="color:#00BFFF"></i></a></li>
								<li class="googleplus"><a href="https://plus.google.com/oaucoc/"><i class="fa fa-google-plus" style="color:#FF6347"></i></a></li>
								<li class="youtube"><a href="https://youtube.com/oaucoc/"><i class="fa fa-youtube" style="color:#FF2626"></i></a></li>
								<li class="instagram"><a href="https://instagram.com/coc_oau/"><i class="fa fa-instagram" style="color:#f9f0eb"></i></a></li>
							</ul>
						</div>

						<div class="space col-md-1 col-sm-1">
						</div>

						<div class="col-md-3 col-sm-3 widget footer-widget">
				          	
				          	
	                		<!-- <h3 class="title text-left">OUR SERVICES</h3>
	                		<hr align="left" width="60%">
	                		<p class="large" style="color:#FF6347"><i class="fa fa-calendar"></i>SUNDAYS | 9AM <br> HSLT A</p>
	                		<p class="large" style="color:#00BFFF"><i class="fa fa-calendar">WEDNESDAYS | 7PM <br> FAJ LOWER BUTTERY</p>
	                		<p class="large" style="color:#00BFFF"><i class="fa fa-calendar">FRIDAYS | 7PM <br> FAJ LOWER BUTTERY</p>
	                		 -->

				        </div>

				        <div class="space col-md-1 col-sm-1">
						</div>


						<div class="col-md-3 col-sm-3 widget footer-widget">
	          					<!--<h4 class="title text-left">COC OAU ON TWITTER</h4>-->
	          					<a class="twitter-timeline" data-width="300" data-height="300" data-theme="light" href="https://twitter.com/oaucoc">Tweets by oaucoc</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
					<div class="space" style="height:30px"></div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<!--<div class="subfooter">-->
				<div class="footer" style="padding-top: 10px; margin-bottom:0px;">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2016 Church of Christ OAU | All Rights Reserved.</p>
						</div>
					
				</div>
			<!--</div>-->
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="/plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- <script type="text/javascript" src="/js/jquery.fancybox.js"></script> -->
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="/plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="/plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/js/custom.js"></script>

		<script>
			$(document).ready(function(){
			    $('[data-toggle="popover"]').popover(); 
			});
		</script>

		@yield('scripts')

		
	</body>
</html>
