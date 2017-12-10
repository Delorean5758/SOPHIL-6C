<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model_ahp;
use App\Model_kriteria;
use App\Model_user;
use App\Model_pesan;
use App\Model_transaksi;
use PDF;
use Carbon\Carbon;

class AdminController extends Controller
{
	public function dashboard(){ 
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;
		return view('admin.dashboard',compact('data')); //menampilkan menu dashboard
	}

	public function kriteria(){
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;
		return view('admin.kriteria',compact('data')); //menampilkan menu kriteria
	}

	public function alternatif(){
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;
		$data['user'] = DB::select('select * from user where level=?',[1]);

		//untuk menampilkan pilihan kriteria pada menu alternatif
		$data['ukuran'] = Model_kriteria::ukuran();
		$data['pakan'] = Model_kriteria::pakan();
		$data['cuaca'] = Model_kriteria::cuaca();
		$data['waktu'] = Model_kriteria::waktu();
		
		return view('admin.alternatif', compact('data'));

	}

	public function perhitungan(Request $request){
		//mengambil data pada form untuk di masukan ke database
		$data['user'] = $_POST['id_customer'];
		$user = $data['user'];
		$data['ukuran'] = $_POST['id_ukuran'];
		$data['pakan'] = $_POST['pakan'];
		$data['cuaca'] = $_POST['id_cuaca'];
		$data['waktu'] = $_POST['id_waktu'];
		$data['harga'] = $_POST['harga'];
		$data['tanggal'] = $_POST['tanggal'];
		$data['periode'] = $_POST['periode'];
		$periode = $data['periode'];

		//mengecek periode, kalau lebih dari 5 maka tidak bisa insert balik ke route alternatif (/alternatif)
		$data['cekperiode'] = Model_kriteria::cekperiode($user,$periode);
		if ($data['cekperiode'] >= 5 ) {
			$request->session()->flash('perhitungan','Total Periode '.$data['periode'].' Lebih Dari 5, Silahkan Masukkan Periode '.($data['periode'] + 1).'');
			return redirect('/alternatif');
		}else{
			//kalau kurang dr 5 maka ambil nilai kriteria
			$data['hitungkriteria']= Model_kriteria::kriteria();
			$data['nama_kriteria'] = array("ukuran","pakan","waktu","cuaca");
			$data['jumlah_kriteria'] 	= array(0,0,0,0);
			$data['pv_kriteria'] 		= array(0,0,0,0);
			for($i = 0; $i < count($data['nama_kriteria']); $i++){
				for($j = 0; $j < count($data['nama_kriteria']); $j++){
					$data['jumlah_kriteria'][$j] += $data['hitungkriteria'][$j+($i*count($data['nama_kriteria']))]->nilai_kriteria;
				}
			}
			$indeks_pv = 0;
			for($i = 0; $i < count($data['nama_kriteria']); $i++){
				for ($j = 0; $j < count($data['nama_kriteria']); $j ++) { 
					$data['pv_kriteria'][$i] += round($data['hitungkriteria'][$indeks_pv]->nilai_kriteria / $data['jumlah_kriteria'][$j] / 6, 2);
					$indeks_pv++;
				}
			}

			//ambil nilai subkriteria
			$data['hitungsubkriteria']= Model_kriteria::subkriteria();
			$data['nama_subkriteria'] = array("sangat baik","baik","cukup","kurang","sangat kurang");
			$data['jumlah_subkriteria'] 	= array(0,0,0,0,0);
			$data['pv_subkriteria'] 		= array(0,0,0,0,0);
			for($i = 0; $i < count($data['nama_subkriteria']); $i++){
				for($j = 0; $j < count($data['nama_subkriteria']); $j++){
					$data['jumlah_subkriteria'][$j] += $data['hitungsubkriteria'][$j+($i*count($data['nama_subkriteria']))]->nilai_subkriteria;
				}
			}
			$indeks_pv = 0;
			for($i = 0; $i < count($data['nama_subkriteria']); $i++){
				for ($j = 0; $j < count($data['nama_subkriteria']); $j ++) { 
					$data['pv_subkriteria'][$i] += round($data['hitungsubkriteria'][$indeks_pv]->nilai_subkriteria / $data['jumlah_subkriteria'][$j] / 6, 2);
					$indeks_pv++;
				}
			}

			//buat apa
			$data['cekukuran'] = $data['pv_subkriteria'][4 - ($data['ukuran'] -1 )];
			$data['cekpakan'] = $data['pv_subkriteria'][4 - ($data['pakan'] -1 )];
			$data['cekcuaca'] = $data['pv_subkriteria'][4 - ($data['cuaca'] -1 )];
			$data['cekwaktu'] = $data['pv_subkriteria'][4 - ($data['waktu'] -1 )];

			
		//perhitungan skor AHPnya
			$data['AHP'] = ($data['pv_kriteria'][0]*$data['cekukuran'])+($data['pv_kriteria'][1]*$data['cekpakan'])+($data['pv_kriteria'][2]*$data['cekcuaca'])+($data['pv_kriteria'][3]*$data['cekwaktu']);

		//buat apa
			$data['k_pakan'] = Model_kriteria::pakan();
			$data['cekdatapakan'] = $data['k_pakan'][($data['pakan']) - 1];

			$data['k_cuaca'] = Model_kriteria::cuaca();
			$data['cekdatacuaca'] = $data['k_cuaca'][($data['cuaca']) - 1]->perkiraan_mati;

			$data['k_ukuran'] = Model_kriteria::ukuran();
			$data['cekdataukuran'] = $data['k_ukuran'][($data['ukuran']) - 1];

			$data['k_waktu'] = Model_kriteria::waktu();
			$data['cekdatawaktu'] = $data['k_waktu'][($data['waktu']) - 1];

		//modal
			$data['beratlele'] = $data['cekdatapakan']->berat + $data['cekdatawaktu']->perkiraan_berat;
			$data['modal'] = $data['cekdatapakan']->harga_pakan + $data['cekdataukuran']->harga_bibit;

		//perhitungan
			$data['tahap1'] = $data['cekdataukuran']->jumlah_bibit - ($data['cekdataukuran']->jumlah_bibit * $data['cekdataukuran']->perkiraan_mati);
			$data['tahap2'] = $data['tahap1'] - ($data['tahap1'] * $data['cekdatacuaca']);
			$data['tahap3'] = $data['tahap2']- ($data['tahap2'] * $data['cekdatawaktu']->perkiraan_mati);
			$data['totalberat'] = ($data['tahap3'] * $data['beratlele'])/1000;
			$data['pemasukan'] = $data['totalberat'] * $data['harga'];
			$data['laba'] = $data['pemasukan'] - $data['modal'];

		//masukan ke database
			$insert = ([
				'id_user' => $data['user'],
				'id_cuaca' => $data['cuaca'],
				'id_pakan' => $data['pakan'],
				'id_ukuran' => $data['ukuran'],
				'id_waktu' => $data['waktu'],
				'modal' => $data['modal'],
				'beratlele' => $data['beratlele'],
				'totalberat' => $data['totalberat'],
				'totalpemasukan' => $data['pemasukan'],
				'laba' => $data['laba'],
				'tanggal' => $data['tanggal'],
				'nilaiahp' => $data['AHP'],
				'periode' => $data['periode']]);

			Model_ahp::create($insert);
			$request->session()->flash('sukses','Berhasil Memasukkan Data');
			return redirect('/ranking');
		}

	}

	public function viewranking(){ //melihat keseluruhan hasil
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['AHP']= Model_ahp::ahp();
		return view('admin.semuaranking',compact('data'));
	}

	public function detail($id){ //melihat detail per id
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['AHP']=  Model_ahp::detail($id);
		return view('admin.detail', compact('data'));
	}

	public function hasil(){ //dropdown pada menu hasil (milih username siapa yg mau dilihat)
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['user'] = Model_user::user();
		return view('admin.ranking', compact('data'));
	}

	public function optimasi(Request $request){ //hasil optimasi per id
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['id'] = $_POST['id_customer'];
		$idcustomer = $data['id'];
		$data['user'] = DB::select('select * from user where level=?',[1]);
		$data['nama'] =  DB::select ('select username from user where id_user = ?',[$data['id']])[0]->username;

		
		$data['cek'] = Model_ahp::cek_ahp($idcustomer);
		if ($data['cek'][0]->total == 0){
			$request->session()->flash('gagal','Data Kosong');
			return redirect('/hasil');
		}else{
			$data['ahp'] = Model_ahp::ahp_id($idcustomer);
			return view('admin.optimasi', compact('data'));
		}
	}

	public function pesan(){ //menampilkan tabel pemesanan
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['pesan'] = Model_pesan::pesansudah(); //untuk pesan yg sudah ditangani
		$data['sudah'] = Model_pesan::pesanbelum(); //pesan yg belum ditangani
		return view('admin.pesan',compact('data'));
	}

	public function detailpesan($id){ //detail pesan
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['detail'] = Model_pesan::detailpesan($id);
		$data['status'] = $data['detail'][0]->status;
		return view('admin.detailpesan',compact('data'));
	}

	public  function proses(Request $request){ //mengupdate atau menerima pesanan
		$data['id_pesan'] = $_POST['id_pesan'];
		$idpesan = $data['id_pesan'];

		Model_pesan::ubah($idpesan);
		$request->session()->flash('sukses','Pemesanan Sudah Berhasil Diproses');
		return redirect('/pesan');
	}

	public function payment(){ //menampilkan yg belum di aprove pembayarannya
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['payment'] = Model_transaksi::payment();
		return view('admin.payment',compact('data'));
	}

	public function proses_payment(Request $request){ //update, sudah di aprove

		if ($request->oke) {
			$data['id_transaksi'] = $_POST['id_transaksi'];
			$idtransaksi = $data['id_transaksi'];
			$data['id_user'] = $_POST['id_user'];
			$iduser =$data['id_user'];

		Model_transaksi::ubahtransaksi($idtransaksi); //update status transaksi
		Model_user::ubahuser($iduser); //update status user

		$request->session()->flash('sukses','Pembayaran berhasil diproses');
		return redirect('/payment');
	}else{
		$data['id_transaksi'] = $_POST['id_transaksi'];
		$idtransaksi = $data['id_transaksi'];
		$data['id_user'] = $_POST['id_user'];
		$iduser =$data['id_user'];

		Model_transaksi::hapus($idtransaksi);
		Model_user::ubahuser2($iduser);
		$request->session()->flash('gagal','Pembayaran tolak');
		return redirect('payment');
	}

}

}