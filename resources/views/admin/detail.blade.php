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
					<a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Detail Data </a>
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
							<h3 class="panel-title">Detail Data</h3>
							<span class="text-grey">Data Peternak</span>
						</div>
						<div class="panel-body">
							<form action="{{url('/update_biodata')}}" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
								<div class="form-group">
									<label class="col-sm-3 control-label">Nama Lengkap</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="nama" value="{{$data['AHP'][0]->username}}" required readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Bibit</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" value="{{$data['AHP'][0]->nama_ukuran}}" required readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Pakan</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" value="{{$data['AHP'][0]->nama_pakan}}" required readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Waktu</label>
									<div class="col-sm-6">
										<input type="text" placeholder="Placeholder text" class="form-control" value="{{$data['AHP'][0]->nama_waktu}}" required readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Cuaca</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" value="{{$data['AHP'][0]->nama_cuaca}}" readonly required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Modal</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" value="{{$data['AHP'][0]->modal}}" required readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Berat Lele</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" value="{{$data['AHP'][0]->beratlele}}" readonly required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Berat Total</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" value="{{$data['AHP'][0]->totalberat}}" required readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Income </label>
									<div class="col-sm-6">
										<input type="text" class="form-control" value="{{$data['AHP'][0]->totalpemasukan}}" required readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Laba</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" value="{{$data['AHP'][0]->laba}}" required readonly>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
@endsection