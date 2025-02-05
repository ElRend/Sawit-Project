<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pohon;
use CodeIgniter\HTTP\ResponseInterface;

class PohonController extends BaseController
{
    protected $pohonModel;

    public function __construct()
    {
        $this->pohonModel = new Pohon();
    }

    public function index()
    {
        $data = [
            "produksi" => $this->pohonModel->orderBy("id", "desc")->paginate(10),
        ];

        return view('admin/pohon/pohon', $data);
    }
}
