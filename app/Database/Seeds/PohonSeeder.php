<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PohonSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tahun_tanam' => '2018-05-10',
                'jenis_bibit' => 'Bibit Unggul A',
                'slug' => 'bibit-unggul-a',
            ],
            [
                'tahun_tanam' => '2017-07-12',
                'jenis_bibit' => 'Bibit Unggul B',
                'slug' => 'bibit-unggul-b',
            ],
            [
                'tahun_tanam' => '2019-03-15',
                'jenis_bibit' => 'Bibit Lokal C',
                'slug' => 'bibit-lokal-c',
            ],
            [
                'tahun_tanam' => '2016-10-20',
                'jenis_bibit' => 'Bibit Lokal D',
                'slug' => 'bibit-lokal-d',
            ],
            [
                'tahun_tanam' => '2020-02-11',
                'jenis_bibit' => 'Bibit Super E',
                'slug' => 'bibit-super-e',
            ],
        ];

        // Insert data ke tabel pohon
        $this->db->table('pohon')->insertBatch($data);
    }
}
