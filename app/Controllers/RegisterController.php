<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class RegisterController extends BaseController
{
    public function index()
    {
        // Menampilkan view form registrasi
        return view('register');
    }

    public function save()
    {
        // Validasi input form
        if (!$this->validate([
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]',
        ])) {
            // Jika validasi gagal, kembalikan ke halaman register dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Mengambil data dari request
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Menghash password
        ];

        // Membuat instance dari UserModel
        $userModel = new Users();

        // Menyimpan data ke tabel users
        if ($userModel->insert($data)) {
            // Jika berhasil, redirect ke halaman login atau halaman sukses
            return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
        } else {
            // Jika gagal, kembalikan ke halaman register dengan pesan error
            return redirect()->back()->withInput()->with('error', 'Registrasi gagal, coba lagi.');
        }
    }
}
