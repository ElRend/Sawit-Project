<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePohon extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tahun_tanam' => [
                'type'       => 'DATE',
            ],
            'jenis_bibit' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pohon');
    }

    public function down()
    {
        $this->forge->dropTable('pohon');
    }
}
