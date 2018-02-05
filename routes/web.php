<?php
use App\Siswa;
use App\Wali;
use App\Guru;
use App\Mapel;
use App\Mapel_siswa;
use App\Kelas;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',function(){
	$siswa = siswa::with('wali','guru','kelas','mapel')->get();
	return View::make('index', compact('siswa'));
});

Route::get('soal1', function(){
	$kelas = kelas::with('siswa')->get();
	return View::make('soal1', compact('kelas'));
});

Route::get('soal3', function(){
	$wali = wali::with('siswa')->get();
	return View::make('soal3', compact('wali'));
});


Route::get('soal2', function(){
	$guru = guru::with('siswa')->get();
	return View::make('soal2', compact('guru'));
});
