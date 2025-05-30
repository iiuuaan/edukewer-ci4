<?php

namespace App\Controllers;

class AdminDashboardController extends BaseController
{
    public function index(): string
    {
        $data['username'] = session()->get('username');
        return view('admin/dashboard', $data);
    }
}
