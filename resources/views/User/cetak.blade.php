<!DOCTYPE html>
<html>
<head>
	<title>Data Perhitungan</title>
</head>
<body>
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
</body>
</html>