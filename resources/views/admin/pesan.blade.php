@extends('layout.sidebaradmin')

@section('content')
<div id="main-panel">
	
	<div id="content">
		<div class="container-fluid">
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Daftar Pesan</h3>
						<label class="label label-default">Belum Diproses</label>
					</div>
					<div class="panel-body table-responsive table-full">
						<table class="table table-border table-striped" id="pesan">
							<thead>
								<tr>
									<td class="text-center text-nowrap">No</td>
									<td class="text-center text-nowrap">ID Pesan</td>
									<td class="text-center text-nowrap">Pengirim</td>
									<td class="text-center text-nowrap">Status</td>
									<td class="text-center text-nowrap">Action</td>
								</tr>
							</thead>
							<tbody>

								@foreach($data['pesan'] as $key => $value)
								<tr>
									<td class="text-center text-nowrap">{{($key+1)}}</td>
									<td class="text-center text-nowrap">{{$value->id_pesan}}</td>
									<td class="text-center text-nowrap">{{$value->username}}</td>
									<td class="text-center text-nowrap"><label class="label label-default">Belum Diproses</label></td>
									<td class="text-center text-nowrap">
										<a href="detailpesan/{{$value->id_pesan}}" target="blank"><button class="btn btn-primary">View</button></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>					
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Daftar Pesan</h3>
						<label class="label label-success">Sudah Diproses</label>
					</div>
					<div class="panel-body table-responsive table-full">
						<table class="table table-border table-striped" id="sudah">
							<thead>
								<tr>
									<td class="text-center text-nowrap">No</td>
									<td class="text-center text-nowrap">ID Pesan</td>
									<td class="text-center text-nowrap">Pengirim</td>
									<td class="text-center text-nowrap">Status</td>
									<td class="text-center text-nowrap">Action</td>
								</tr>
							</thead>
							<tbody>

								@foreach($data['sudah'] as $key => $value)
								<tr>
									<td class="text-center text-nowrap">{{($key+1)}}</td>
									<td class="text-center text-nowrap">{{$value->id_pesan}}</td>
									<td class="text-center text-nowrap">{{$value->username}}</td>
									<td class="text-center text-nowrap"><label class="label label-success">Belum Diproses</label></td>
									<td class="text-center text-nowrap">
										<a href="detailpesan/{{$value->id_pesan}}"><button class="btn btn-primary">View</button></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>					
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection