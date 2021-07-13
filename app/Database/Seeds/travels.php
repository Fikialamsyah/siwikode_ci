<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Travels extends Seeder
{
	public function run()
	{
		// membuat data
		$travels_data = [
			[
				'nama' => 'Taman Pasir Putih',
				'jenis'  => 'Kolam Renang',
				'alamat' => 'Jl. Rw. Geni Raya No.1, RT.1/RW.7, Pasir Putih, Kec. Sawangan, Kota Depok, Jawa Barat 16519',
				'telp' => '021 29434479',
				'bintang' => '4',
				'foto' => 'pasir_putih.jpg',
			],
			[
				'nama' => 'Hutan Pinus Cibubur',
				'jenis'  => 'Argo Wisata',
				'alamat' => 'Jl. Al-Muzamil No.5, Harjamukti, Kec. Cimanggis, Kota Depok, Jawa Barat 16454',
				'telp' => '-',
				'bintang' => '4',
				'foto' => 'hutan_pinus.jpg',
			],
		];

		// insert semua data ke table
		foreach($travels_data as $data){
			$this->db->table('travels')->insert($data);
		}
	}
}
