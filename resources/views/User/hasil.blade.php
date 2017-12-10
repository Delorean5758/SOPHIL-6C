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
					<a class="navbar-brand text-size-24" href="#"><i class="fa fa-list-alt"></i> Hasil Optimasi Lele</a>
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
							<form action="/detail_hasil" method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
								<div class="col-md-6">
									@if($data['cek_periode'] == 0)

									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama</label>
											<div class="col-sm-9">
												<select class="form-control" name="periode" placeholder="Periode" required>
													<option value="">PILIH PERIODE</option>
													@foreach($data['periode'] as $row)
													<option value='{{$row->periode}}'>{{$row->periode}}</option>;
													@endforeach												
												</select>
											</div>
										</div>								
									</div>

									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label"></label>
											<div class="col-sm-9">
												<button class="btn btn-success" type="submit" disabled="">Submit</button>

											</div>
										</div>
									</div>
									@else

									<div class="form-group">
										<div class="form-group">
											<label class="col-sm-3 control-label">Nama</label>
											<div class="col-sm-9">
												<select class="form-control" name="periode" placeholder="Periode" required>
													<option value="">PILIH PERIODE</option>
													@foreach($data['periode'] as $row)
													<option value='{{$row->periode}}'>{{$row->periode}}</option>;
													@endforeach												
												</select>
											</div>
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
									@endif
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