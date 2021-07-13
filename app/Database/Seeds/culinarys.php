<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Culinarys extends Seeder
{
	public function run()
	{
		// membuat data
		$culinarys_data = [
			[
				'nama' => 'Warung SS',
				'jenis'  => 'Restaurant',
				'alamat' => 'Jl. Margonda Raya No.280, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16423',
				'telp' => '021 77201492',
				'bintang' => '4',
				'foto' => 'warung_ss.jpg',
			],
			[
				'nama' => 'Pancong Lava',
				'jenis'  => 'Cafe',
				'alamat' => 'Jl. Margonda Raya No.493, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424',
				'telp' => '0878 73839310',
				'bintang' => '4',
				'foto' => 'pancong_lava.jpg',
			],
		];

		// insert semua data ke table
		foreach($culinarys_data as $data){
			$this->db->table('culinarys')->insert($data);
		}
	}
}
