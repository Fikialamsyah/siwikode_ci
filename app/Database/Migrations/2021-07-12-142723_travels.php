<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Travels extends Migration
{
	public function up()
	{
		// membuat field untuk table travels
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'jenis'       => [
				'type'           => 'ENUM',
				'constraint'     => ['Argo Wisata', 'Taman Wisata', 'Museum', 'Kolam Renang']
			],
			'alamat'       => [
				'type'           => 'TEXT',
			],
			'telp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '13'
			],
			'bintang'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '10'
			],
			'foto'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'			 => true,
			],
		]);

		// membuat primary key
		$this->forge->addPrimaryKey('id', TRUE);

		// membuat table travels
		$this->forge->createTable('travels', TRUE);
	}

	public function down()
	{
		// menghapus table travels
		$this->forge->dropTable('travels');
	}
}
