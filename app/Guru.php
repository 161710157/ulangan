<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
     # Tentukan nama tabel terkait
	protected $table = 'guru';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama', 'nik','alamat','mata_pelajaran');

	/*
	 * Relasi One-to-Many
	 * ==================
	 * Buat function bernama mahasiswa(), dimana model 'Dosen' akan memiliki 
	 * relasi One-to-Many terhadap model 'Mahasiswa' sebagai 'id_dosen'
	 */
	public function siswa() {
		return $this->hasMany('App\Siswa', 'guru_id');
	}

}
