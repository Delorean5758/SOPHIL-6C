<!DOCTYPE html>
<html lang="en">
<head>
	<title>SOPHIL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Farming Company Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link href="{{url('lele/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!--// bootstrap-css -->
	<!-- css -->
	<link rel="stylesheet" href="{{url('lele/css/style.css')}}" type="text/css" media="all" />
	<link rel="stylesheet" href="{{url('lele/css/lightbox.css')}}">
	<!--// css -->
	<!-- font-awesome icons -->
	<link href="{{url('lele/css/font-awesome.css')}}" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	<!-- font -->
	<link href="//fonts.googleapis.com/css?family=Righteous&subset=latin-ext" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="{{url('lele/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{url('lele/js/bootstrap.js')}}"></script>
	<script src="{{url('lele/js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
</head>
<body>
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3layouts-logo">
						<h1><a href="/">SOPHIL<span>Sistem Optimasi Hasil Ikan Lele</span></a></h1>
					</div>
				</div>
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="/halamanlogin" class="hvr-sweep-to-bottom">Login</a></li>
							<li><a href="/register" class="hvr-sweep-to-bottom">Register</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

	@yield('content')
	
	<div class="footer">
		<div class="container">
			<div class="agileinfo_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<div class="agile-logo">
						<h4><a href="/">Lele <span>Company</span></a></h4>
					</div>
					<p>Memaksimalkan Hasil Ternak Lele<br>PPL Agroindustri</p>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<ul class="agileinfo_footer_grid_list">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Program Studi Sistem Informasi <span>Universitas Jember</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">seekarel@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+6289.661.6060.77</li>
					</ul>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileinfo_footer_grid_nav">
						<li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="/">Home</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile_footer_copy">
				<p>&copy; 2017 Lele Company| Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="{{url('lele/js/lightbox-plus-jquery.min.js')}}"> </script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<!-- //here ends scrolling icon -->
	</body>	
	</html>