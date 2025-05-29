<?php

namespace App\Controllers;

use App\Models\ModuleModel;

class Module extends BaseController
{
    public function view($courseId, $moduleNumber)
    {
        $model = new ModuleModel();

        $module = $model->where([
            'course_id' => $courseId,
            'module_number' => $moduleNumber
        ])->first();

        if (!$module) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Modul tidak ditemukan.");
        }

        return view('user/module_view', ['module' => $module]);
    }
}

