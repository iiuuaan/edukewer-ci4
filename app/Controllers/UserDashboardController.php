<?php

namespace App\Controllers;

class UserDashboardController extends BaseController
{
    public function index(): string 
    {
        $data['username'] = session()->get('username');
        return view('user/dashboard', $data);
    }

    public function course(): string 
    {
        $data['username'] = session()->get('username');
        return view('user/course', $data);
    }

}