<?php

namespace App\Models;

use CodeIgniter\Model;

class Produksi extends Model
{
    protected $table            = 'produksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_produksi', 'slug', 'Tanggal_Panen', 'id_pohon', 'Jumlah_Buah', 'Buah_Matang'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['generateSlug'];
    protected $beforeUpdate   = ['generateSlug'];

    /**
     * Fungsi untuk menghasilkan slug dari nama produksi.
     */
    protected function generateSlug(array $data)
    {
        if (isset($data['data']['nama_produksi'])) {
            $data['data']['slug'] = url_title($data['data']['nama_produksi'], '-', true);
        }

        return $data;
    }
}
