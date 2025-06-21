<?php

namespace App\Controllers;

use App\Models\ModuleModel;
use App\Models\EnrollmentModel;
use App\Models\ForumThreadModel;
use App\Models\ForumPostModel;

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

        $threadModel = new ForumThreadModel();
        $postModel = new ForumPostModel();
        // Ambil thread yang sesuai dengan course & module ini
        $threads = $threadModel->where([
            'course_id' => $courseId,
            'module_number' => $moduleNumber
        ])->findAll();

        // Ambil semua post berdasarkan thread_id
        $postsGrouped = [];
        foreach ($threads as $thread) {
            $postsGrouped[$thread['thread_id']] = $postModel
                ->where('thread_id', $thread['thread_id'])
                ->orderBy('created_at', 'ASC')
                ->findAll();
        }

        return view('user/module_view', [
            'module' => $module,
            'threads' => $threads,
            'postsGrouped' => $postsGrouped
        ]);
    }
}
