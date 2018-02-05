<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

	protected $fillable = array('nama', 'kelas', 'nis', 'id_kelas', 'id_guru');

	public function guru() {
		return $this->belongsTo('App\Guru', 'id_guru');
	}
	public function kelas() {
		return $this->belongsTo('App\Kelas', 'id_kelas');
	}
	public function mapel() {
		return $this->belongsToMany('App\Mapel', 'mapel_siswa', 'id_mapel', 'id_siswa');
	}
	public function wali() {
		return $this->belongsTo('App\Wali', 'id_siswa');
	}
}
