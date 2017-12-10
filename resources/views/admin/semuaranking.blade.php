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
					<a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i>View Semua Ranking</a>
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
							<h3 class="panel-title">Hasil</h3>
							<span class="text-grey">Data Peternak</span>
						</div>
						<div class="panel-body table-responsive table-full">
							<table id="semua" class="table table-stripped table-bordered">
								<thead>
									<tr>
										<td class="text-center text-nowrap">ID </td>
										<td class="text-center text-nowrap">Nama Peternak</td>
										<td class="text-center text-nowrap">Periode</td>
										<td class="text-center text-nowrap">Cuaca</td>
										<td class="text-center text-nowrap">Bibit</td>
										<td class="text-center text-nowrap">Pakan</td>
										<td class="text-center text-nowrap">Waktu</td>
										<td class="text-center text-nowrap">Skor</td>
										<td class="text-center text-nowrap">Action</td>
									</tr> 
								</thead>
								
								<tbody>
									@foreach($data['AHP'] as $value)
									<tr>
										<td class="text-center text-nowrap">{{$value->id_ahp}}</td>
										<td class="text-center text-nowrap">{{$value->username}}</td>
										<td class="text-center text-nowrap">{{$value->periode}}</td>
										<td class="text-center text-nowrap">{{$value->nama_cuaca}}</td>
										<td class="text-center text-nowrap">{{$value->nama_ukuran}}</td>
										<td class="text-center text-nowrap">{{$value->nama_pakan}}</td>
										<td class="text-center text-nowrap">{{$value->nama_waktu}}</td>
										<td class="text-center text-nowrap">{{($value->nilaiahp)}}</td>
										<td class="text-center text-nowrap">
											<a href="/detail/{{$value->id_ahp}}"><button type="submit" class="btn btn-success"><i class="fa fa-fw fa-list-alt"></i><font color="white">Detail</font></button></a>
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
</div>
@endsection