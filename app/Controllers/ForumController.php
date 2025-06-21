<?php

namespace App\Controllers;

namespace App\Controllers;

use App\Models\ForumPostModel;
use App\Models\ForumThreadModel;

class ForumController extends BaseController
{
    public function post()
    {
        $model = new ForumPostModel();

        $data = [
            'thread_id' => $this->request->getPost('thread_id'),
            'user_id'   => session()->get('user_id'), // pastikan diset saat login
            'content'   => $this->request->getPost('content'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $model->insert($data);
        return redirect()->back();
    }
public function createThread()
{
    $threadModel = new ForumThreadModel();

    $data = [
        'user_id'       => session()->get('user_id'),
        'course_id'     => $this->request->getPost('course_id'),
        'module_number' => $this->request->getPost('module_number'),
        'title'         => $this->request->getPost('title'),
        'content'       => $this->request->getPost('content'),
        'created_at'    => date('Y-m-d H:i:s')
    ];

    $threadModel->insert($data);
    return redirect()->back();
}

}
