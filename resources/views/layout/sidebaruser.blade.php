<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SOPHIL</title>
	<link rel="stylesheet" href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/theme-floyd.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/theme-helper.css')}}">
</head>

<body>
	<div id="wrapper" >
		<div id="sidebar">
			<div id="sidebar-wrapper">
				<div class="sidebar-title">
					<span class="text-size-40 text-loose">SOPHIL</span><br>
					<span class="text-size-18 text-grey">Sistem Optimasi Hasil <br> Ternak Ikan Lele</span>
				</div>
				<div class="sidebar-avatar">
					<div class="sidebar-avatar-image"><img src="assets/images/logo.jpeg" alt="" class="img-circle"></div>
					<div class="sidebar-avatar-text">{{$data['username']}}</div>
				</div>
				<ul class="sidebar-nav">
					<li><a href="/dashboard_user"><i class="fa fa-fw fa-window-restore"></i><span>Dashboard</span></a></li>
					<li><a href="/hasil_user"><i class="fa fa-fw fa-window-restore"></i><span>Hasil</span></a></li>
					<li><a href="/bayar"><i class="fa fa-fw fa-window-restore"></i><span>Pembayaran</span></a></li>
					<li><a href="/pesan_user"><i class="fa fa-fw fa-window-restore"></i><span>Pesan</span></a></li>
					<li><a href="/"><i class="fa fa-fw fa-power-off"></i><span>Logout</span></a></li>
				</ul>
				<div class="sidebar-footer">
					<hr style="border-color: #DDD">
					created by <a href="http://www.instagram.com/seekarel" target="_blank" class="text-default">Sekar Elok</a><br>
				</div>
			</div>
		</div>
		
		@yield('content')
	</div>
</body>
<script src="{{url('assets/plugins/jquery/jquery-3.1.1.min.js')}}"></script>
<script src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/theme-floyd.js')}}"></script>
@extends('pesan')
</html>