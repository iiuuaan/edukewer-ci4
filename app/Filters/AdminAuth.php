<?php 

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        // Cek apakah user sudah login
        if (!session()->get('username')) {
            // Jika belum login, tampilkan pesan error
            return redirect()->to('/admin/login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Jika sudah login tapi rolenya bukan 'admin'
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/admin/login')->with('error', 'Akses ditolak. Silakan login sebagai admin.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak digunakan
    }
}
