<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
* 
*/
class Model_ahp extends Model
{
	protected $table = 'AHP';
	protected $primaryKey = 'id_ahp';
	protected $fillable = ['id_ahp','id_user','id_cuaca','id_pakan','id_ukuran','id_waktu','modal','beratlele','totalberat','totalpemasukan','laba','tanggal','nilaiahp','periode'];

	public static function ahp(){
		return DB::select('select * from ahp a join user u on a.id_user=u.id_user join k_cuaca kc on a.id_cuaca=kc.id_cuaca join k_waktu kw on a.id_waktu=kw.id_waktu join k_ukuran ku on a.id_ukuran=ku.id_ukuran join k_pakan kp on a.id_pakan=kp.id_pakan order by a.id_ahp desc');
	}

	public static function detail($id){
		return DB::select('select * from ahp a join user u on a.id_user=u.id_user join k_cuaca kc on a.id_cuaca=kc.id_cuaca join k_waktu kw on a.id_waktu=kw.id_waktu join k_ukuran ku on a.id_ukuran=ku.id_ukuran join k_pakan kp on a.id_pakan=kp.id_pakan where a.id_ahp= ?',[$id]);
	}

	public static function ahp_id($idcustomer){
		return DB::select('select * from ahp a join user u on a.id_user=u.id_user join k_cuaca kc on a.id_cuaca=kc.id_cuaca join k_waktu kw on a.id_waktu=kw.id_waktu join k_ukuran ku on a.id_ukuran=ku.id_ukuran join k_pakan kp on a.id_pakan=kp.id_pakan where a.id_user =? order by a.periode desc',[$idcustomer]);
	}

	public static function cek_ahp($idcustomer){
		return DB::select('select count(id_ahp) as total from ahp a join user u on a.id_user=u.id_user join k_cuaca kc on a.id_cuaca=kc.id_cuaca join k_waktu kw on a.id_waktu=kw.id_waktu join k_ukuran ku on a.id_ukuran=ku.id_ukuran join k_pakan kp on a.id_pakan=kp.id_pakan where a.id_user =? order by a.periode desc',[$idcustomer]);
	}

	public static function cetak($id){
		return DB::select('select * from ahp a join user u on a.id_user=u.id_user join k_cuaca kc on a.id_cuaca=kc.id_cuaca join k_waktu kw on a.id_waktu=kw.id_waktu join k_ukuran ku on a.id_ukuran=ku.id_ukuran join k_pakan kp on a.id_pakan=kp.id_pakan where a.id_user =? order by a.periode desc',[$id]);
	}

	public static function periode($id){
		return DB::select('select periode from ahp where id_user = ? group by periode',[$id]);
	}
	
	public static function cekperiode($id){
		return DB::select('select count(periode) as total from ahp where id_user = ?',[$id])[0]->total;
	}

	public static function detailahp($id,$periode){
		return DB::select('select * from ahp a join user u on a.id_user=u.id_user join k_cuaca kc on a.id_cuaca=kc.id_cuaca join k_waktu kw on a.id_waktu=kw.id_waktu join k_ukuran ku on a.id_ukuran=ku.id_ukuran join k_pakan kp on a.id_pakan=kp.id_pakan where a.id_user = ? and a.periode = ? ',[$id,$periode]);
	}

	public $timestamps = false;
}
