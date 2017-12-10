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
							blablasalksdjidfdf
							@if($data['status']==0)
							<form action="/transaksi" method="post">
								<button class="btn btn-success" type="submit">sudah membayar</button>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							</form>
							@elseif($data['status']==2)
							<form action="/transaksi" method="post">
								<button class="btn btn-success" type="submit" disabled>sudah membayar</button>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							</form>
							@else
							<button class="btn btn-success" type="submit" disabled>sudah membayar</button>
							@endif
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	@endsection