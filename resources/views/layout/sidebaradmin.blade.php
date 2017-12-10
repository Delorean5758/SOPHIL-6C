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
					<li class="sidebar-close"><a href="#"><i class="fa fa-fw fa-close"></i></a></li>
					<li><a href="/dashboard"><i class="fa fa-fw fa-home"></i><span>Dashboard</span></a></li>
					<li><a href="/kriteria"><i class="fa fa-fw fa-list-alt"></i><span>Kriteria</span></a></li>
					<li><a href="/alternatif"><i class="fa fa-fw fa-window-maximize"></i><span>Optimasi</span></a></li>
					<li><a href="/pesan"><i class="fa fa-fw fa-window-maximize"></i><span>Pesan</span></a></li>					
					<li><a href="/payment"><i class="fa fa-fw fa-window-maximize"></i><span>Payment</span></a></li>					
					<li><a href="/ranking"><i class="fa fa-fw fa-window-restore"></i><span>Semua Hasil</span></a></li>
					<li><a href="/hasil"><i class="fa fa-fw fa-window-restore"></i><span>Hasil</span></a></li>
					<li><a href="/"><i class="fa fa-fw fa-power-off"></i><span>Logout</span></a></li>
					<!-- <li><a href="/subkriteria"><i class="fa fa-fw fa-list-alt"></i><span>Sub-Kriteria</span></a></li> -->
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
<script type="text/javascript" src="{{url('assets/js/jquery-1.12.4.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/datatables.min.js')}}"></script>
@extends('pesan')
<script type="text/javascript">
	$(document).ready(function() {
		$('#semua').DataTable({
			"lengthMenu": [[2, 25, 50, -1], [7, 25, 50, "All"]]
		});
		$('#pesan').DataTable({
			"lengthMenu": [[7, 25, 50, -1], [7, 25, 50, "All"]]
		});
		$('#sudah').DataTable({
			"lengthMenu": [[2, 25, 50, -1], [7, 25, 50, "All"]]
		});
		$('#payment').DataTable({
			"lengthMenu": [[2, 25, 50, -1], [7, 25, 50, "All"]]
		});
	} );
</script>
</html>