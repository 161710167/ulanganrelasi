<?php

use Illuminate\Database\Seeder;
use App\Guru;
use App\Kelas;
use App\Mapel;
use App\Siswa;
use App\Wali;

class SeederData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Kosongin isi tabel
		DB::table('guru')->delete();
		DB::table('kelas')->delete();
		DB::table('mapel')->delete();
		DB::table('siswa')->delete();
		DB::table('wali')->delete();

		/***********************************
		 *** SEEDER GURU ***
		 ***********************************/
		$a = Guru::create(array(
			'nama' => 'Atu',
			'nik'  => '789900',
			'alamat' => 'Bandung',
			'mata_pelajaran' => 'Bhs Inggris'));

		/***********************************
		 *** SEEDER KELAS ***
		 ***********************************/
		$b = Kelas::create(array(
			'nama_kelas'  => 'X'
		));
		
		/***********************************
		 *** SEEDER MAPEL ***
		 ***********************************/
		$bhs_inggris = mapel::create(array('mapel'=>'bhs inggris','kkm'=>'75'));

		$nanang->mapel()->attach($bhs_inggris->id);
		/***********************************
		 *** SEEDER SISWA ***
		 ***********************************/
		 $nanang = Siswa::create(array(
            'nama'=>'nanang',
            'nis'=>'16139876',
            'id_guru'=>$a->id,
            'id_jurusan'=>$b->id));

		/***********************************
		 *** SEEDER WALI ***
		 ***********************************/
		Wali::create(array(
			'nama'  => 'ceuceu',
			'alamat'  => 'Jakarta',
			'id_siswa' => $c->id
		));
    }
}
