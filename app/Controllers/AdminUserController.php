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

    public function update($id)
    {
        $model = new \App\Models\UserModel();

        $data = ['username' => $this->request->getPost('username')];

        $model->update($id, $data);

        return redirect()->to(site_url('admin/users'))->with('message', 'User updated.');
    }

    public function delete($id)
    {
        $model = new \App\Models\UserModel();

        if (!$model->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("User with ID $id not found.");
        }

        $model->delete($id);

        return redirect()->to(site_url('admin/users'))->with('message', 'User deleted successfully.');
    }
}
