<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
* 
*/
class Model_user extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'id_user';
	protected $fillable = ['id_user','username','password','alamat','hp','level','status_pembayaran'];

	public static function user(){
		return DB::select('select * from user where level=?',[1]);
	}

	public static function ubahuser($iduser){
		return DB::table('user')
		->where('id_user', $iduser)->update(['status_pembayaran' => 1]);
	}

	public static function ubahuser2($iduser){
		return DB::table('user')
		->where('id_user', $iduser)->update(['status_pembayaran' => 0]);
	}

	public static function cekuser($username,$password){
		return DB::select('select count(id_user) as jumlah from user where username = ? and password = ?',[$username,$password])[0]->jumlah;
	}

	public static function ceklevel($username, $password){
		return DB::select('select level from user where username = ? and password = ?',[$username,$password])[0]->level;
	}

	public static function ceksession($username,$password){
		return DB::select('select id_user from user where username = ? and password = ?',[$username,$password])[0]->id_user;
	}

	public static function statuspembayaran($id){
		return DB::select('select status_pembayaran from user where id_user = ?',[$id])[0]->status_pembayaran;

	}

	public static function cekusername($username){
		return DB::select('select count(id_user) as row from user where username=?',[$username])[0]->row;
	}

	public $timestamps = false;

}