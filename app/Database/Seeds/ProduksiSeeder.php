<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProduksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'Tanggal_Panen' => '2023-01-10',
                'id_pohon' => 1,
                'Jumlah_Buah' => 50,
                'Buah_Matang' => 45,
                'Jumlah_Bunga_Dompet' => 10,
                'Jumlah_Bunga_Jantan' => 20,
                'Jumlah_Bunga_Betina' => 15,
                'Jumlah_Janjang_Panen' => 25,
                'Berat_Janjang_Panen' => 80,
                'slug' => 'panen-1',
            ],
            [
                'Tanggal_Panen' => '2023-02-15',
                'id_pohon' => 2,
                'Jumlah_Buah' => 60,
                'Buah_Matang' => 55,
                'Jumlah_Bunga_Dompet' => 12,
                'Jumlah_Bunga_Jantan' => 22,
                'Jumlah_Bunga_Betina' => 18,
                'Jumlah_Janjang_Panen' => 30,
                'Berat_Janjang_Panen' => 90,
                'slug' => 'panen-2',
            ],
            [
                'Tanggal_Panen' => '2023-03-20',
                'id_pohon' => 3,
                'Jumlah_Buah' => 70,
                'Buah_Matang' => 65,
                'Jumlah_Bunga_Dompet' => 14,
                'Jumlah_Bunga_Jantan' => 24,
                'Jumlah_Bunga_Betina' => 20,
                'Jumlah_Janjang_Panen' => 35,
                'Berat_Janjang_Panen' => 100,
                'slug' => 'panen-3',
            ],
            [
                'Tanggal_Panen' => '2023-04-25',
                'id_pohon' => 4,
                'Jumlah_Buah' => 80,
                'Buah_Matang' => 75,
                'Jumlah_Bunga_Dompet' => 16,
                'Jumlah_Bunga_Jantan' => 26,
                'Jumlah_Bunga_Betina' => 22,
                'Jumlah_Janjang_Panen' => 40,
                'Berat_Janjang_Panen' => 110,
                'slug' => 'panen-4',
            ],
            [
                'Tanggal_Panen' => '2023-05-30',
                'id_pohon' => 5,
                'Jumlah_Buah' => 90,
                'Buah_Matang' => 85,
                'Jumlah_Bunga_Dompet' => 18,
                'Jumlah_Bunga_Jantan' => 28,
                'Jumlah_Bunga_Betina' => 24,
                'Jumlah_Janjang_Panen' => 45,
                'Berat_Janjang_Panen' => 120,
                'slug' => 'panen-5',
            ],
        ];

        // Insert data ke tabel produksi
        $this->db->table('produksi')->insertBatch($data);
    }
}
