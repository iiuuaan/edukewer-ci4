<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UserAuth implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {

        // Cek apakah user sudah login
        if (!session()->get('username')) {
            // Jika belum login, tampilkan pesan error
            return redirect()->to('/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Jika sudah login tapi rolenya bukan 'user'
        if (session()->get('role') !== 'user') {
            return redirect()->to('/login')->with('error', 'Akses ditolak. Silakan login sebagai user.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing after
    }
}
