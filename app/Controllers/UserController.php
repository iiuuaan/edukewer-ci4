<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{

    public function login(): string
    {
        return view('user/login');
    }

    public function register(): string
    {
        return view('user/register');
    }

    public function saveRegister()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new \App\Models\UserModel();

        // Cek apakah username sudah ada
        if ($model->where('username', $username)->first()) {
            session()->setFlashdata('error', 'Username sudah terdaftar.');
            return redirect()->to('/register');
        }

        // Simpan user baru
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $model->insert($data);

        session()->setFlashdata('success', 'Registrasi berhasil. Silakan login.');
        return redirect()->to('/login');
    }

    public function check_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $user = $model->where('username', $username)->first();

        // Cek apakah user ditemukan dan password cocok
        if (!$user || !password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'Username atau password salah.');
            return redirect()->to('/login');
        }

        // Cek apakah role adalah 'user'
        if ($user['role'] !== 'user') {
            session()->setFlashdata('error', 'Anda tidak memiliki akses sebagai user.');
            return redirect()->to('/login');
        }

        // Set session jika login berhasil
        session()->set([
            'user_id'   => $user['id'],
            'username' => $user['username'],
            'role'     => $user['role'],
            'logged_in' => true
        ]);

        return redirect()->to('user/dashboard');
    }

    public function logout()
    {
        session()->destroy(); // Hapus semua data session
        return redirect()->to('/login'); // Arahkan ke halaman login
    }


}
