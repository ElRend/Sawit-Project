<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function create(){
        
        return view('produksi.produksi_create');
    }
}
