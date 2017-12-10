<!DOCTYPE html>
<html>
<head>
	<title>Login SOPHIL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="{{url('login/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{url('login/css/style.css')}}" type="text/css" media="all">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>


<h1>SISTEM OPTIMASI HASIL <br> TERNAK LELE</h1>
<div class="w3layoutscontaineragileits">
	<h2>Login</h2>
	<form action="/ceklogin" method="post">
		<input type="text" Name="Username" placeholder="USERNAME" required="">
		<input type="password" Name="Password" placeholder="PASSWORD" required="">
		<ul class="agileinfotickwthree">
			<li>
				<input type="checkbox" id="brand1" value="">
				<label for="brand1"><span></span>Remember me</label>
			</li>
		</ul>
		<div class="aitssendbuttonw3ls">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" value="LOGIN">				
			<p> 
				<a class="w3_play_icon1" href="/register"> Register</a>
				<a class="w3_play_icon1" href="/">Home</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	<div class="w3footeragile">
		<p> &copy; 2017 Lele Company | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
	</div>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	@extends('pesan')
</body>
</html>