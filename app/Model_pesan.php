<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
* 
*/
class Model_pesan extends Model
{
	protected $table = 'pesan';
	protected $primaryKey = 'id_pesan';
	protected $fillable = ['id_pesan','id_user','pesan','status'];

	public static function pesansudah(){
		return DB::select ('select * from pesan p  join user u on p.id_user = u.id_user where status = ?',[0]);
	}

	public static function pesanbelum(){
		return DB::select ('select * from pesan p  join user u on p.id_user = u.id_user where status = ?',[1]);
	}

	public static function detailpesan($id){
		return DB::select ('select * from pesan p  join user u on p.id_user = u.id_user where id_pesan = ?',[$id]);
	}

	public static function ubah($idpesan){
		DB::table('pesan')
		->where('id_pesan', $idpesan)
		->update(['status' => 1]);
	}

	public $timestamps = false;

}