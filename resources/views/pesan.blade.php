<script type="text/javascript" src="{{url('assets/js/swal.js')}}"></script>

<script type="text/javascript">
	var sukses = '{{session('sukses')}}';
	var gagal = '{{session('gagal')}}';
	var perhitungan = '{{session('perhitungan')}}'
	if(sukses != ''){
		swal({
			type: 'success',
			title: sukses,
			showConfirmButton: false,
			timer: 1600
		})
	}
	if(gagal != ''){
		swal({
			type: 'error',
			title: gagal,
			showConfirmButton: false,
			timer: 1600
		})
	}
	if(perhitungan != ''){
		swal(
			'Input Gagal',perhitungan,'error')
	}
</script>