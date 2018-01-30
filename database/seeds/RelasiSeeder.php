<?php

use Illuminate\Database\Seeder;
use App\Wali;
use App\Siswa;
use App\Guru;
use App\Kelas;


class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->delete();
		DB::table('wali')->delete();
		DB::table('guru')->delete();
		DB::table('kelas')->delete();

		$a = Guru::create(array(
			'nama' => 'Bu neneng',
			'nik' => '723238242',
			'alamat' => 'Baleendah',
			'mata_pelajaran' => 'Ilmu Pengetahuan Alam'));
		$this->command->info('Guru telah diisi!');

        $b = Kelas::create(array(
			'nama_kelas' => 'XI-RPL 2'));

        $this->command->info('kelas telah diisi!');

		$ara = Siswa::create(array(
			'nama' => 'Diandra Aulia Putri',
			'nis'  => '1015015072',
			'guru_id' => $a->id,
			'kelas_id' => $b->id));
		$this->command->info('siswa telah diisi!');


		Wali::create(array(
			'nama'  => 'Dadang Sudrajat',
			'alamat' => 'Ciborerang',
			'siswa_id' => $ara->id));
		$this->command->info('Data siswa dan wali telah diisi!');
    }
}
