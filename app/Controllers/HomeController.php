<?php

namespace App\Controllers;

use App\Models\CourseModel;

class HomeController extends BaseController
{
    public function index(): string
    {

        $model = new CourseModel();
        $courses = $model->findAll();

        return view('index', ['courses' => $courses]);
    }
}
