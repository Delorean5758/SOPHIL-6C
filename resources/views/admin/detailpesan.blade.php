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
					<a class="navbar-brand text-size-24"><i class="fa fa-list-alt"></i> Detail Pemesanan </a>
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
				<h3 class="panel-title">Daftar Pesan</h3>
				<label class="label label-default">Belum Diproses</label>
				</div>
				<div class="panel-body table-responsive table-full">
					<table class="table table-border table-striped">
						<thead>
							<tr>
							<td class="text-center text-nowrap">ID Pesan</td>
							<td class="text-center text-nowrap">Nama Pemesan</td>
							<td class="text-center text-nowrap">Isi</td>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td class="text-center text-nowrap">{{$data['detail'][0]->id_pesan}}</td>
							<td class="text-center text-nowrap">{{$data['detail'][0]->username}}</td>
							<td class="text-left">{{$data['detail'][0]->pesan}}</td>
						</tr>
						</tbody>
					</table>
					<div class="col-md-12" align="right"><br>
						<form action="/proses_pemesanan" method="post">
							<input type="hidden" name="id_pesan" value="{{$data['detail'][0]->id_pesan}}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							@if ($data['status']==0)
							<button class="btn btn-success" type="submit">Update</button>	
							@else		
							<button disabled="" class="btn btn-default" type="submit">Update</button>
							@endif	
						</form>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection