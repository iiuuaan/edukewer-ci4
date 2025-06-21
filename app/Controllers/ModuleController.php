<?php

namespace App\Controllers;

use App\Models\ModuleModel;
use App\Models\EnrollmentModel;

class ModuleController extends BaseController
{
    public function view($courseId, $moduleNumber)
    {

        // Ambil user ID dari session
        $userId = session()->get('user_id');
        // Cek apakah user sudah enroll
        $enrollmentModel = new EnrollmentModel();
        $isEnrolled = $enrollmentModel
            ->where('user_id', $userId)
            ->where('course_id', $courseId)
            ->first();
        $moduleModel = new ModuleModel();
        $module = $moduleModel->where([
            'course_id' => $courseId,
            'module_number' => $moduleNumber
        ])->first();

        if (!$module) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Modul tidak ditemukan.");
        }

        return view('user/module_view', [
            'module' => $module,
        ]);
    }
}
