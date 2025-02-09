<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{

    protected $usersModel;
    public function __construct()
    {
        $this->usersModel = new Users();
    }

    public function index()
    {
        if (session()->get('logged_in') == true) {
            // Jika belum login, redirect ke halaman login
            return redirect()->to('admin/dashboard');
        }
        
        $data = [
            "title" => "Login",
        ];
        return view("login/login", $data);
    }

    public function login()
    {
        
        // Validasi input
        $validation = $this->validate([
            'email' => 'required|max_length[254]|valid_email',
            'password' => 'required|max_length[255]|min_length[8]'
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembalikan ke halaman form dengan pesan error
            return redirect('login')->withInput()->with('errors', $this->validator->getErrors());
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari pengguna berdasarkan email
        $user = $this->usersModel->where('email', $email)->first();

        if (!$user) {
            // Jika pengguna tidak ditemukan, kembalikan ke halaman login dengan pesan error
            return redirect('login')->withInput()->with('error', 'Email atau password salah.');
        }

        // Verifikasi password
        if (!password_verify($password, $user['password'])) {
            // Jika password tidak cocok, kembalikan dengan pesan error
            return redirect('login')->withInput()->with('error', 'Email atau password salah.');
        }

        // Jika login berhasil, buat sesi pengguna
        $sessionData = [
            'user_id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'logged_in' => true
        ];

        // Simpan data ke dalam session
        session()->set($sessionData);

        // Redirect ke halaman dashboard atau halaman lain yang diinginkan
        return redirect('admin/dashboard')->with('success', 'Welcome ' . $user['username']);
    }

    public function logout()
    {
        // Hapus semua data session
        session()->destroy();

        // Redirect ke halaman login atau halaman depan setelah logout
        return redirect()->to('/login')->with('success', 'You have been logged out.');
    }

}
