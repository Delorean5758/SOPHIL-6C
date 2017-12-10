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
					<a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Optimasi Lele</a>
				</div>
			</div>
		</nav>
	</div>
	<div id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="/perhitungan" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
								<div class="col-md-6">
									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama</label>
											<div class="col-sm-9">
												<select class="form-control" name="id_customer" placeholder="Nama" required>
													<option value="">PILIH NAMA</option>
													@foreach($data['user'] as $row)
													<option value='{{$row->id_user}}'>{{$row->username}}</option>;
													@endforeach												
												</select>
											</div>
										</div>								
									</div>
									<hr>
									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label">Ukuran</label>
											<div class="col-sm-9">
												<select class="form-control" name="id_ukuran" placeholder="Ukuran" required>
													<option value="">PILIH SUB-KRITERIA</option>
													@foreach($data['ukuran'] as $row)
													<option value='{{$row->id_ukuran}}'>{{$row->nama_ukuran}}</option>;
													@endforeach	
												</select>
											</div>
										</div>								
									</div>
									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label">Pakan</label>
											<div class="col-sm-9">
												<select class="form-control" name="pakan" placeholder="Pakan" required>
													<option value="">PILIH SUB-KRITERIA</option>
													@foreach($data['pakan'] as $row)
													<option value='{{$row->id_pakan}}'>{{$row->nama_pakan}}</option>;
													@endforeach	
												</select>
											</div>
										</div>								
									</div>
									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label">Waktu</label>
											<div class="col-sm-9">
												<select class="form-control" name="id_waktu" placeholder="Waktu" required>
													<option value="">PILIH SUB-KRITERIA</option>
													@foreach($data['waktu'] as $row)
													<option value='{{$row->id_waktu}}'>{{$row->nama_waktu}}</option>;
													@endforeach	
												</select>
											</div>
										</div>								
									</div>	
									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label">Cuaca</label>
											<div class="col-sm-9">
												<select class="form-control" name="id_cuaca" placeholder="Cuaca" required>
													<option value="">PILIH SUB-KRITERIA</option>
													@foreach($data['cuaca'] as $row)
													<option value='{{$row->id_cuaca}}'>{{$row->nama_cuaca}}</option>;
													@endforeach	
												</select>
											</div>
										</div>								
									</div>
									
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-sm-3 control-label">Tanggal</label>
										<div class="col-sm-9">
											<input type="date" placeholder="Placeholder text" class="form-control" name="tanggal" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Harga Lele</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Placeholder text" class="form-control" name="harga" required>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Periode</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Placeholder text" class="form-control" name="periode" required>
										</div>
									</div>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-9">
												<button class="btn btn-success" type="submit">Submit</button>
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