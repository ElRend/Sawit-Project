<?php

namespace App\Controllers;

use App\Models\Pohon;
use App\Models\Produksi;

class Home extends BaseController
{
    protected $produksiModel;
    protected $pohonModel;

    public function __construct()
    {
        $this->produksiModel = new Produksi();
        $this->pohonModel = new Pohon();
    }
    public function index(): string
    {
        $data = [
            'jenis_bibit_count' => $this->pohonModel->countAll(),
            'produksi_count' => $this->produksiModel->countAll()

        ];
        return view('home', $data);
    }
}
