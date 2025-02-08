<?php

namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\I18n\Time;

class Produksi extends Model
{
    protected $table            = 'produksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['slug', 'Tanggal_Panen', 'id_pohon', 'Jumlah_Buah', 'Buah_Matang','Jumlah_Bunga_Dompet','Jumlah_Bunga_Jantan','Jumlah_Bunga_Betina','Jumlah_Janjang_Panen','Berat_Janjang_Panen'];

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
        if (isset($data['data']['Tanggal_Panen'])) {
            $data['data']['slug']= url_title($data['data']['id_pohon']."-".$data['data']['Tanggal_Panen']."-".bin2hex(random_bytes(8)), '-', true);
            
        }

        return $data;
    }
    public function getProduksiWithPohon()
    {
        return $this->select('produksi.*, pohon.jenis_bibit')
                    ->join('pohon', 'pohon.id = produksi.id_pohon')
                    ->get()->getResultArray();
    }
}
