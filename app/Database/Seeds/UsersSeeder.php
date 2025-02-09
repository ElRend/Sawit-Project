<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'Muhammad Fazil Chandra',
                'email' => 'fazil@gmail.com',
                'password' => password_hash('password', PASSWORD_DEFAULT) 
            ]
        ];

        // Insert data ke tabel users
        $this->db->table('users')->insertBatch($data);
    }
}
