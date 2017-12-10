<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model_user;


use Carbon\Carbon;
/**
* 
*/
class LoginController extends Controller
{

	public function halamanawal(){
		return view('landing');
	}
	
	public function login(){
		return view('login');
	}

	public function ceklogin(Request $request){
		$username = $_POST['Username'];
		$password = $_POST['Password'];

		$count = Model_user::cekuser($username,$password); 
		// dd($count);

		if($count == 1){
			$level = Model_user::ceklevel($username,$password);
			$session = Model_user::ceksession($username,$password);
			if ($level==0) {
				$request->session()->flash('sukses','Selamat Datang'.$username);
				$request->session()->put('iduser', $session);
				return redirect('/dashboard');
			}else{
				$request->session()->flash('sukses','Selamat Datang'.$username);
				$request->session()->put('iduser',$session);
				return redirect('/dashboard_user');
			}
		}else{
			$request->session()->flash('gagal','Username / Password Salah');
			return redirect('/halamanlogin');
		}
	}

	public function register(){
		return view('register');
	}

	public function tambah(Request $request){
		$level=1;
		$username = $_POST['Username'];
		$password = $_POST['Password']; 
		$data['cekusername'] = Model_user::cekusername($username);
		if ($data['cekusername']==0){
			$insert = ([
				'username' => $request->Username,
				'password' => $request->Password,
				'alamat' => $request->Alamat,
				'hp' => $request->Nomor,
				'level' => $level]);
			Model_user::create($insert);
			$request->session()->flash('sukses','Pendaftaran Berhasil');
			return redirect('/halamanlogin');
		}else{
			$request->session()->flash('gagal','Username telah digunakan');
			return redirect('/halamanlogin');
		}
	}

}

