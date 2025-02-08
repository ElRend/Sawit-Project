<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "username" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "created_at" => [
                "type" => "DATETIME",
                "null" => true
            ],
            "updated_at" => [
                "type" => "DATETIME",
                "null" => true
            ],
            "deleted_at" => [
                "type" => "DATETIME",
                "null" => true
            ]
        ]);

        // Set primary key
        $this->forge->addKey('id', true);

        // Membuat tabel user
        $this->forge->createTable('users');
    }


    public function down()
    {
        $this->forge->dropTable('users');
        
    }
}
