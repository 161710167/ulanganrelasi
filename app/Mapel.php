<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

	protected $fillable = array('nama_mapel', 'kkm');

	public function siswa() {
		return $this->belongsToMany('App\Siswa', 'mapel_siswa', 'id_siswa', 'id_mapel');
	}
}
