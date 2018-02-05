<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

	protected $fillable = array('nama_kelas');

	public function kelas() {
		return $this->hasMany('App\Kelas', 'id_kelas');
	}
}
