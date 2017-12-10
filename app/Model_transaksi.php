<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
* 
*/
class Model_transaksi extends Model
{
	protected $table = 'transaksi';
	protected $primaryKey = 'id_transaksi';
	protected $fillable = ['id_transaksi','id_user','status_transaksi'];

	public static function payment(){
		return DB::select('select * from transaksi t join user u on t.id_user = u.id_user where status_transaksi = ?',[0]);
	}

	public static function ubahtransaksi($idtransaksi){
		DB::table('transaksi')
		->where('id_transaksi', $idtransaksi)->update(['status_transaksi' => 1]);
	}

	public static function hapus($idtransaksi){
		DB::table('transaksi')->where('id_transaksi', $idtransaksi)->delete();
	}

	public $timestamps = false;
}