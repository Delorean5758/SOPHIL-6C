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
					<a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i>View Optimasi </a>
				</div>
			</div>
		</nav>
	</div>
	<div id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Hasil Optimasi {{$data['nama']}}</h3>
							<span class="text-grey">Data Peternak</span>
						</div>
						<form action="/optimasi" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-9">
											<select class="col-sm-3 form-control" name="id_customer" placeholder="Nama" required>
												<option value="">PILIH NAMA</option>
												@foreach($data['user'] as $row)
												<option value='{{$row->id_user}}'>{{$row->username}}</option>;
												@endforeach												
											</select><BR>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<button class=" col-sm-3 btn btn-success" type="submit">Submit</button>
										</div>
									</div>								
								</div>
							</div>
						</form>
						<div class="panel-body table-responsive table-full">
							<table class="table table-stripped table-bordered">
								<tr>
									<td class="text-center text-nowrap">ID </td>
									<td class="text-center text-nowrap">Nama Peternak</td>
									<td class="text-center text-nowrap">Periode</td>
									<td class="text-center text-nowrap">Cuaca</td>
									<td class="text-center text-nowrap">Bibit</td>
									<td class="text-center text-nowrap">Pakan</td>
									<td class="text-center text-nowrap">Waktu</td>
									<td class="text-center text-nowrap">Skor</td>
									<td class="text-center text-nowrap">Modal</td>
									<td class="text-center text-nowrap">Berat</td>
									<td class="text-center text-nowrap">Total Berat</td>
									<td class="text-center text-nowrap">Income</td>
									<td class="text-center text-nowrap">Laba</td>

								</tr> 
								@foreach($data['ahp'] as $value)
								
								<tr>
									<td class="text-center text-nowrap">{{$value->id_ahp}}</td>
									<td class="text-center text-nowrap">{{$value->username}}</td>
									<td class="text-center text-nowrap">{{$value->periode}}</td>
									<td class="text-center text-nowrap">{{$value->nama_cuaca}}</td>
									<td class="text-center text-nowrap">{{$value->nama_ukuran}}</td>
									<td class="text-center text-nowrap">{{$value->nama_pakan}}</td>
									<td class="text-center text-nowrap">{{$value->nama_waktu}}</td>
									<td class="text-center text-nowrap">{{$value->nilaiahp}}</td>
									<td class="text-center text-nowrap">{{$value->modal}}</td>
									<td class="text-center text-nowrap">{{$value->beratlele}}</td>
									<td class="text-center text-nowrap">{{$value->totalberat}}</td>
									<td class="text-center text-nowrap">{{$value->totalpemasukan}}</td>
									<td class="text-center text-nowrap">{{$value->laba}}</td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection