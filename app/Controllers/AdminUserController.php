<?php

namespace App\Controllers;

class AdminUserController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\UserModel();
        $users = $model->findAll();

        return view('admin/manage_users', ['users' => $users]);
    }
}
