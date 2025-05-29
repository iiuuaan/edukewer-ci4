<?php

namespace App\Controllers;

use App\Models\CourseModel;

class Course extends BaseController
{
    public function index()
    {
        $model = new CourseModel();
        $course = $model->find(1); // assuming you're fetching course with ID = 1

        return view('user/course', ['course' => $course]);
    }

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
