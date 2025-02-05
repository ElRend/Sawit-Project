<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableProduksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 255,
                'null' => false,
                'auto_increment' => true,
            ],
            'Tanggal_Panen' => [
                'type' => 'DATE',
                'null' => false
            ],
            'id_pohon' => [
                'type' => 'INT',  
                'unsigned' => true,  
                'null' => false
            ],
            'Jumlah_Buah' => [
                'type' => 'INT',
                'null' => false
            ],
            'Buah_Matang' => [
                'type' => 'INT',
                'null' => false
            ],
            'Jumlah_Bunga_Dompet' => [
                'type' => 'INT',
                'null' => false
            ],
            'Jumlah_Bunga_Jantan' => [
                'type' => 'INT',
                'null' => false
            ],
            'Jumlah_Bunga_Betina' => [
                'type' => 'INT',
                'null' => false
            ],
            'Jumlah_Janjang_Panen' => [
                'type' => 'INT',
                'null' => false
            ],
            'Berat_Janjang_Panen' => [
                'type' => 'INT',
                'null' => false
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addForeignKey('id_pohon', 'pohon', 'id');

        $this->forge->addKey('id', true);

        $this->forge->createTable('produksi');
    }

    public function down()
    {
        $this->forge->dropTable('produksi');
    }
}
