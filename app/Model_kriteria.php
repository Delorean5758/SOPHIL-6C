<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
/**
* 
*/
class Model_kriteria extends Model
{
	protected $table = 'kriteria';
	protected $primaryKey = 'id_kriteria';
	protected $fillable = ['id_kriteri','nama_kriteria','nilai_kriteria'];

	public static function cekperiode($user,$periode){
		return DB::select('select count(periode) as total_periode from ahp where id_user = ? and periode = ?',[$user,$periode])[0]->total_periode;
	}

	public static function kriteria(){
		return DB::select('select nilai_kriteria from kriteria');
	}

	public static function subkriteria(){
		return DB::select('select nilai_subkriteria from subkriteria');
	}

	public static function ukuran(){
		return DB::select('select * from k_ukuran');
	}

	public static function pakan(){
		return DB::select('select * from k_pakan');
	}

	public static function waktu(){
		return DB::select('select * from k_waktu');
	}

	public static function cuaca(){
		return DB::select('select * from k_cuaca');
	}

	public $timestamps = false;

}