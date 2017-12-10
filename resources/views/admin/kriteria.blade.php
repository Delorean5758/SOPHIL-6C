@extends('layout.sidebaradmin')

@section('content')
<div id="main-panel">
	<div id="top-nav">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
						<i class="fa fa-bars"></i>
					</button>
					<button type="button" class="sidebar-toggle">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand text-size-24"><marquee><i class="fa fa-list-alt"></i> View Kriteria </marquee> </a>
				</div>
			</div>
		</nav>
	</div>
	<div id="content">
		<div class="container-fluid">
		</div><div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Daftar Sub-Kriteria</h3>
				</div>
				<div class="panel-body table-responsive table-full">
					<table class="table ">
						<tr>
							<td class="text-center text-nowrap"></td>
							<td class="text-center text-nowrap ">Ukuran</td>
							<td class="text-center text-nowrap ">Pakan</td>
							<td class="text-center text-nowrap ">Waktu</td>
							<td class="text-center text-nowrap ">Cuaca</td>
						</tr>
						<tr>
							<td class="text-center text-nowrap">Sangat Baik</td>
							<td class="text-center text-nowrap text-grey">8-9 cm </td>
							<td class="text-center text-nowrap text-grey">781-2</td>
							<td class="text-center text-nowrap text-grey">110 hari </td>
							<td class="text-center text-nowrap text-grey">Kondisi cuaca sangat stabil</td>
						</tr>
						<tr>
							<td class="text-center text-nowrap">Baik</td>
							<td class="text-center text-nowrap text-grey">7-6 cm </td>
							<td class="text-center text-nowrap text-grey">781-1</td>
							<td class="text-center text-nowrap text-grey">100 hari </td>
							<td class="text-center text-nowrap text-grey">Kondisi cuaca stabil</td>
						</tr>
						<tr>
							<td class="text-center text-nowrap">Cukup</td>
							<td class="text-center text-nowrap text-grey">5-4 cm </td>
							<td class="text-center text-nowrap text-grey">PF 1000</td>
							<td class="text-center text-nowrap text-grey">90 hari </td>
							<td class="text-center text-nowrap text-grey">Kondisi cuaca kurang stabil</td>
						</tr>
						<tr>
							<td class="text-center text-nowrap">Kurang</td>
							<td class="text-center text-nowrap text-grey">3-2 cm </td>
							<td class="text-center text-nowrap text-grey">Kuning Telur</td>
							<td class="text-center text-nowrap text-grey">80 hari </td>
							<td class="text-center text-nowrap text-grey">Kondisi cuaca sering berubah-ubah</td>
						</tr>
						<tr>
							<td class="text-center text-nowrap">Sangat Kurang</td>
							<td class="text-center text-nowrap text-grey"> >1 cm </td> 
							<td class="text-center text-nowrap text-grey">Pelet</td>
							<td class="text-center text-nowrap text-grey">70 hari</td>
							<td class="text-center text-nowrap text-grey">Kondisi cuaca sangat sering berubah-ubah</td>
						</tr>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection