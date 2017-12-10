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
						
						<table class="table table-border table-striped" id="payment">
							<thead>
								<tr>
									<td class="text-center text-nowrap">No</td>
									<td class="text-center text-nowrap">ID Transaksi</td>
									<td class="text-center text-nowrap">Pengirim</td>
									<td class="text-center text-nowrap">Pesan</td>
									<td class="text-center text-nowrap">Status</td>
									<td class="text-center text-nowrap">Action</td>
								</tr>
							</thead>
							<tbody>

								@foreach($data['payment'] as $key => $value)
								<tr>
									<form action="/proses_payment" method="post">
										<input type="hidden" name="id_transaksi" value="{{$value->id_transaksi}}">
										<input type="hidden" name="id_user" value="{{$value->id_user}}">
										<td class="text-center text-nowrap">{{($key+1)}}</td>
										<td class="text-center text-nowrap">{{$value->id_transaksi}}</td>
										<td class="text-center text-nowrap">{{$value->username}}</td>
										<td class="text-center text-nowrap">Telah Terima Pembayaran dari <b>{{$value->username}}</b> Nominal <label class="label label-success">Rp. 200.000,-</label></td>
										<td class="text-center text-nowrap"><label class="label label-default">Belum Diproses</label></td>
										<td class="text-center text-nowrap">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											
											<button class="btn btn-primary" type="submit" name="oke" value="oke">Terima</button>
											<button class="btn btn-danger" type="submit" name="no" value="no">Tolak</button>
										</td>
									</form>	
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