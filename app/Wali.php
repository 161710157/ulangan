<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
     protected $table = 'wali';

	protected $fillable = array('nama', 'alamat', 'siswa_id');
	
	public function siswa() {
		return $this->belongsTo('App\Siswa', 'siswa_id');
	}
}
