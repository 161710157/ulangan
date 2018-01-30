<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

	protected $fillable = array('nama', 'nis','guru_id','kelas_id');
//---------------------------------------------------------------
	public function wali() {
		return $this->hasOne('App\Wali', 'siswa_id');
	}
//---------------------------------------------------------------
	public function guru() {
		return $this->belongsTo('App\Guru', 'guru_id');
	}
//---------------------------------------------------------------
	public function kelas() {
		return $this->belongsTo('App\Kelas', 'kelas_id');
	}
}
