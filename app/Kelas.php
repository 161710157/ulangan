<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    # Tentukan nama tabel terkait
	protected $table = 'kelas';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('nama_kelas');

	/*
	 * Relasi One-to-Many
	 * ==================
	 * Buat function bernama mahasiswa(), dimana model 'Dosen' akan memiliki 
	 * relasi One-to-Many terhadap model 'Mahasiswa' sebagai 'id_dosen'
	 */
	public function siswa() {
		return $this->hasMany('App\Siswa', 'kelas_id');
	}
}
