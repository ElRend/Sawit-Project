<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pohon;
use App\Models\Produksi;
use CodeIgniter\HTTP\ResponseInterface;

class PohonController extends BaseController
{
    protected $pohonModel;
    protected $produksiModel;

    public function __construct()
    {
        $this->pohonModel = new Pohon();
        $this->produksiModel = new Produksi();
    }

    public function index()
    {
        $data = [
            "pohons" => $this->pohonModel->orderBy("id", "asc")->paginate(10),
        ];

        return view('admin/pohon/pohon', $data);
    }

    public function create()
    {
        // Validasi input
        $validation = $this->validate([
            'tahun_tanam' => 'required|valid_date',
            'jenis_bibit' => 'required|string',
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembalikan ke halaman form dengan pesan error
            return redirect('admin/pohon')->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'tahun_tanam' => $this->request->getPost('tahun_tanam'),
            'jenis_bibit' => $this->request->getPost('jenis_bibit'),
        ];

        $this->pohonModel->insert($data);

        return redirect()->to('/admin/pohon')->with('success', 'Data produksi berhasil ditambahkan!');
    }

    public function update($id)
    {
        // Validasi input
        $validation = $this->validate([
            'tahun_tanam' => 'required|valid_date',
            'jenis_bibit' => 'required|string',
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembalikan ke halaman form dengan pesan error
            return redirect('admin/pohon')->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'tahun_tanam' => $this->request->getPost('tahun_tanam'),
            'jenis_bibit' => $this->request->getPost('jenis_bibit'),
        ];

        $validationData = $this->pohonModel->update($id,$data);
        
        if(!$validationData){
            return redirect('admin/pohon')->withInput()->with('errors', $this->validator->getErrors());
        }
        

        return redirect()->to('/admin/pohon')->with('success', 'Data produksi berhasil diUpdate!');
    }

    public function delete($slug)
    {
        // Cari data pohon berdasarkan slug
        $pohon = $this->pohonModel->where('slug', $slug)->first();
        
        if (!$pohon) {
            // Jika data pohon tidak ditemukan, kembalikan error
            return redirect()->to('/admin/pohon')->with('error', 'Jenis Bibit tidak ditemukan.');
        }

        // Cek apakah pohon terkait dengan produksi
        $produksiTerkait = $this->produksiModel->where('id_pohon', $pohon['id'])->first();

        if ($produksiTerkait) {
            // Jika pohon terkait dengan produksi, kembalikan pesan error
            return redirect()->to('/admin/pohon')->with('errors', 'Pohon masih terkait dengan produksi, tidak bisa dihapus.');
        }

        // Hapus pohon jika tidak terkait dengan produksi
        $this->pohonModel->delete($pohon['id']);

        // Redirect dengan pesan sukses
        return redirect()->to('/admin/pohon')->with('success', 'Pohon berhasil dihapus.');
    }

}

