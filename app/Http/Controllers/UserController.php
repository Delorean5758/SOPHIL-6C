<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model_ahp;
use App\Model_pesan;
use App\Model_transaksi;
use App\Model_user;
use PDF;
use Carbon\Carbon;

class UserController extends Controller
{
	public function dashboard(){
		$data['session'] = session('iduser');
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;
		return view('user.dashboard',compact('data'));
	}	

	public function hasil(){ //menampilkan hasil per id per periode sesuai user pada menu hasil
		$data['session'] = session('iduser');
		$id = $data['session'];
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['periode'] = Model_ahp::periode($id);
		$data['cek_periode'] = Model_ahp::cekperiode($id);
		
		return view('user.hasil',compact('data'));
	}

	public function detail_hasil(){ //detail hasilnya
		$data['id_periode'] = $_POST['periode'];
		$periode = $data['id_periode'];

		$data['session'] = session('iduser');
		$id = $data['session'];
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['periode'] = Model_ahp::periode($id);
		$data['cek_periode'] = Model_ahp::cekperiode($id);

		$data['ahp'] = Model_ahp::detailahp($id,$periode);

		return view('user.detail_hasil',compact('data'));
	}

	public function pesan(){ //menampilkan form pesan
		$data['session'] = session('iduser');
		$id = $data['session'];
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['status'] = Model_user::statuspembayaran($id); //mengecek status pembayaran kl sudah bayar maka aktif kolomnya, if nya di view
		return view('user.formpesan', compact('data'));
	}

	public function kirim(Request $request){ //mengirim pesan
		$data['session'] = session('iduser');
		$data['pesan'] = $_POST['pesan'];
		$data['status'] = 0;

		$insert =([
			'id_user' => $data['session'],
			'pesan' => $data['pesan'],
			'status' => $data['status']]);

		Model_pesan::create($insert);
		DB::table('user')->where('id_user', $data['session'])->update(['status_pembayaran' => $data['status']]);
		$request->session()->flash('sukses','Pesan Terkirim');
		return redirect('/pesan_user');
	}

	public function bayar(){ //tombol bayar pada view pembayaran
		$data['session'] = session('iduser');
		$id = $data['session'];
		$data['username'] = DB::select('select username from user where id_user = ?',[$data['session']])[0]->username;

		$data['status'] = Model_user::statuspembayaran($id);
		return view('user.bayar',compact('data'));
	}

	public function transaksi(Request $request){ //untuk proses tomol sudah membayar pada pembayaran
		$data['session'] = session('iduser');
		$data['status'] = 0;
		$data['status_user'] = 2;
		$insert =([
			'id_user' => $data['session'],
			'status_transaksi' => $data['status']]);

		Model_transaksi::create($insert);
		DB::table('user')->where('id_user', $data['session'])->update(['status_pembayaran' => $data['status_user']]);
		$request->session()->flash('sukses','Pesan Terkirim');
		return redirect('/dashboard_user');
	}


	public function cetak($id){ //mencetak

		$data['ahp'] = Model_ahp::cetak($id);
		$pdf = PDF::loadView('user.cetak',compact('data'));

		return $pdf->download('coba.pdf');
	}
}