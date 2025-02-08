<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pohon;
use App\Models\Produksi;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    protected $pohonModel;
    protected $produksiModel;
    protected $usersModel;

    public function __construct()
    {
        $this->pohonModel = new Pohon();
        $this->produksiModel = new Produksi();
        $this->usersModel = new Users();
    }

    public function index()
    {
        $data = [
            "pohon" => $this->pohonModel->orderBy("id",)->countAllResults(),
            "produksi" => $this->produksiModel->orderBy("id")->countAllResults(),
            "users" => $this->usersModel->orderBy("id")->countAllResults(),
        ]; 
        return view('admin/dashboard', $data);
    }
}
