<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Produksi;

class ProduksiController extends BaseController
{
    protected $produksiModel;

    public function __construct()
    {
        $this->produksiModel = new Produksi();
    }

    public function index()
    {
        $data = [
            "produksi" => $this->produksiModel->orderBy("id", "desc")->paginate(10),
        ];

        return view('admin/produksi/produksi', $data);
    }
}
