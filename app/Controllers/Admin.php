<?php

namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{

    public function login(): string
    {
        return view('admin/login');
    }

    public function check_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $user = $model->where('username', $username)->first();

        // Cek apakah user ada dan password cocok
        if (!$user || !password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'Username atau password salah.');
            return redirect()->to('/admin/login');
        }

        // Cek apakah role-nya adalah admin
        if ($user['role'] !== 'admin') {
            session()->setFlashdata('error', 'Anda tidak memiliki akses sebagai admin.');
            return redirect()->to('/admin/login');
        }

        // Login berhasil
        session()->set([
            'username' => $user['username'],
            'role'     => $user['role'],
            'logged_in' => true
        ]);

        return redirect()->to('/admin/dashboard');
    }

    public function logout()
    {
        session()->destroy(); // Hapus semua data session
        return redirect()->to('/admin/login'); // Arahkan ke halaman login
    }


}
