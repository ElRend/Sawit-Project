<?php

namespace App\Models;

use CodeIgniter\Model;

class Pohon extends Model
{
    protected $table            = 'pohon';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_pohon', 'slug', 'tahun_tanam', 'jenis_bibit'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['generateSlug'];
    protected $beforeUpdate   = ['generateSlug'];

    /**
     * Fungsi untuk menghasilkan slug dari nama pohon.
     */
    protected function generateSlug(array $data)
    {
        if (isset($data['data']['jenis_bibit'])) {
            $data['data']['slug'] = url_title($data['data']['jenis_bibit'], '-', true);
        }

        return $data;
    }
}
