@extends('layout.sidebaruser')

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
					<a class="navbar-brand text-size-24"><i class="fa fa-list-alt"></i>PEMESANAN</a>
				</div>
			</div>
		</nav>
	</div>

	<div id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
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
									<td class="text-center text-nowrap">8-9 cm </td>
									<td class="text-center text-nowrap">781-2</td>
									<td class="text-center text-nowrap">110 hari </td>
									<td class="text-center text-nowrap">Kondisi cuaca sangat stabil</td>
								</tr>
								<tr>
									<td class="text-center text-nowrap">Baik</td>
									<td class="text-center text-nowrap">7-6 cm </td>
									<td class="text-center text-nowrap">781-1</td>
									<td class="text-center text-nowrap">100 hari </td>
									<td class="text-center text-nowrap">Kondisi cuaca stabil</td>
								</tr>
								<tr>
									<td class="text-center text-nowrap">Cukup</td>
									<td class="text-center text-nowrap">5-4 cm </td>
									<td class="text-center text-nowrap">PF 1000</td>
									<td class="text-center text-nowrap">90 hari </td>
									<td class="text-center text-nowrap">Kondisi cuaca kurang stabil</td>
								</tr>
								<tr>
									<td class="text-center text-nowrap">Kurang</td>
									<td class="text-center text-nowrap">3-2 cm </td>
									<td class="text-center text-nowrap">Kuning Telur</td>
									<td class="text-center text-nowrap">80 hari </td>
									<td class="text-center text-nowrap">Kondisi cuaca sering berubah-ubah</td>
								</tr>
								<tr>
									<td class="text-center text-nowrap">Sangat Kurang</td>
									<td class="text-center text-nowrap"> >1 cm </td> 
									<td class="text-center text-nowrap">Pelet</td>
									<td class="text-center text-nowrap">70 hari</td>
									<td class="text-center text-nowrap">Kondisi cuaca sangat sering berubah-ubah</td>
								</tr>
							</table>

						</div>

					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>FORMAT PEMESANAN</h3>
								</div>
								<div class="panel-body">
									<table class="table" border="0" style="border:none;">
										<tr>
											<td>Ukuran </td>
											<td> : </td>
											<td>3-2 CM</td>
										</tr>
										<tr>
											<td>Pakan </td>
											<td> : </td>
											<td>781-2</td>
										</tr>
										<tr>
											<td>Waktu </td>
											<td> : </td>
											<td>110 Hari</td>
										</tr>
										<tr>
											<td>Cuaca</td>
											<td> : </td>
											<td>Kondisi cuaca sangat sering berubah-ubah</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>FORMAT PEMESANAN</h3>
									</div>
									<div class="panel-body">
										@if($data['status']==0 || $data['status']==2)
										<form action="/kirim" method="post">
											<div class="row" style="height: 160px" align="center">	
												<h3>HARAP MELAKUKAN PEMBAYARAN</h3>
											</div>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
										</form>
										@else
										<form action="/kirim" method="post">
											<div class="row" style="height: 160px" align="right">	
												<textarea class="form form-control" name="pesan" style="height: 80%" required></textarea>
												<br>
												<button type="submit" class="btn btn-success">kirim</button>
											</div>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
										</form>
										@endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection