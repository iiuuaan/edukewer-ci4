<?php

namespace App\Controllers;

class Module extends BaseController
{
    public function view($id)
    {
        $courseModel = new \App\Models\CourseModel();
        $moduleModel = new \App\Models\ModuleModel();

        $data['course'] = $courseModel->find($id);
        if (!$data['course']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Course not found");
        }

        $data['modules'] = $moduleModel->where('course_id', $id)->findAll();

        return view('user/course', $data);
    }

}
