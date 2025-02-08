<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pohon;
use App\Models\Produksi;
use CodeIgniter\HTTP\Request;

class ProduksiController extends BaseController
{
    protected $produksiModel;
    protected $pohonModel;

    public function __construct()
    {
        $this->produksiModel = new Produksi();
        $this->pohonModel = new Pohon();
    }

    public function index()
    {
        $data = [
            "produksi" => $this->produksiModel->getProduksiWithPohon(),
            "pohons" => $this->pohonModel->findAll()

        ];

            return view('admin/produksi/produksi', $data);
    }

    public function create()
    {
        // Validasi input
        $validation = $this->validate([
            'Tanggal_Panen' => 'required|valid_date',
            'id_pohon' => 'required|integer',
            'Jumlah_Buah' => 'required|integer',
            'Buah_Matang' => 'required|integer',
            'Jumlah_Bunga_Dompet' => 'required|integer',
            'Jumlah_Bunga_Jantan' => 'required|integer',
            'Jumlah_Bunga_Betina' => 'required|integer',
            'Jumlah_Janjang_Panen' => 'required|integer',
            'Berat_Janjang_Panen' => 'required|integer',
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembalikan ke halaman form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'Tanggal_Panen' => $this->request->getPost('Tanggal_Panen'),
            'id_pohon' => $this->request->getPost('id_pohon'),
            'Jumlah_Buah' => $this->request->getPost('Jumlah_Buah'),
            'Buah_Matang' => $this->request->getPost('Buah_Matang'),
            'Jumlah_Bunga_Dompet' => $this->request->getPost('Jumlah_Bunga_Dompet'),
            'Jumlah_Bunga_Jantan' => $this->request->getPost('Jumlah_Bunga_Jantan'),
            'Jumlah_Bunga_Betina' => $this->request->getPost('Jumlah_Bunga_Betina'),
            'Jumlah_Janjang_Panen' => $this->request->getPost('Jumlah_Janjang_Panen'),
            'Berat_Janjang_Panen' => $this->request->getPost('Berat_Janjang_Panen'),
        ];

        $this->produksiModel->insert($data);

        return redirect()->to('/admin/produksi')->with('success', 'Data produksi berhasil ditambahkan!');
    }

    public function update($id)
    {
        // Validasi input
        $validation = $this->validate([
            'Tanggal_Panen' => 'required|valid_date',
            'id_pohon' => 'required|integer',
            'Jumlah_Buah' => 'required|integer',
            'Buah_Matang' => 'required|integer',
            'Jumlah_Bunga_Dompet' => 'required|integer',
            'Jumlah_Bunga_Jantan' => 'required|integer',
            'Jumlah_Bunga_Betina' => 'required|integer',
            'Jumlah_Janjang_Panen' => 'required|integer',
            'Berat_Janjang_Panen' => 'required|integer',
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembalikan ke halaman form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'Tanggal_Panen' => $this->request->getPost('Tanggal_Panen'),
            'id_pohon' => $this->request->getPost('id_pohon'),
            'Jumlah_Buah' => $this->request->getPost('Jumlah_Buah'),
            'Buah_Matang' => $this->request->getPost('Buah_Matang'),
            'Jumlah_Bunga_Dompet' => $this->request->getPost('Jumlah_Bunga_Dompet'),
            'Jumlah_Bunga_Jantan' => $this->request->getPost('Jumlah_Bunga_Jantan'),
            'Jumlah_Bunga_Betina' => $this->request->getPost('Jumlah_Bunga_Betina'),
            'Jumlah_Janjang_Panen' => $this->request->getPost('Jumlah_Janjang_Panen'),
            'Berat_Janjang_Panen' => $this->request->getPost('Berat_Janjang_Panen'),
        ];


        // Update data berdasarkan id
        $this->produksiModel->update($id, $data);

        return redirect()->to('/admin/produksi')->with('success', 'Data produksi berhasil diupdate!');
    }


    public function delete($slug)
    {
        // Cari data berdasarkan slug
        $produksi = $this->produksiModel->where('slug', $slug)->first();

        if (!$produksi) {
            // Jika data tidak ditemukan, kembalikan error atau pesan
            return redirect()->to('/admin/produksi')->with('error', 'Produksi tidak ditemukan.');
        }

        // Hapus data
        $this->produksiModel->delete($produksi['id']);

        // Redirect dengan pesan sukses
        return redirect()->to('/admin/produksi')->with('success', 'Produksi berhasil dihapus.');
    }


}
