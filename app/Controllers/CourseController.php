<?php

namespace App\Controllers;

class CourseController extends BaseController
{
    public function joinCourse($courseId)
    {
        $userId = session()->get('user_id');

        $enrollModel = new \App\Models\EnrollmentModel();

        // Cek apakah sudah pernah mendaftar
        $existing = $enrollModel->where([
            'user_id' => $userId,
            'course_id' => $courseId
        ])->first();

        // Jika belum, insert data enroll
        if (!$existing) {
            $enrollModel->insert([
                'user_id' => $userId,
                'course_id' => $courseId,
                'enrolled_at' => date('Y-m-d H:i:s'),
                'status' => 'active' // sesuaikan jika ada status lain
            ]);
        }

        return redirect()->to(site_url('user/dashboard'));
    }

    public function view($courseId)
    {
        $courseModel = new \App\Models\CourseModel();
        $moduleModel = new \App\Models\ModuleModel();
        $activityModel = new \App\Models\UserCourseActivityModel();


        $data['course'] = $courseModel->find($courseId);
        if (!$data['course']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Course not found");
        }

        $data['modules'] = $moduleModel
            ->where('course_id', $courseId)
            ->orderBy('module_number', 'ASC')
            ->findAll();


        // Simpan aktivitas terakhir user
        $userId = session()->get('user_id');
        if ($userId) {
            $existing = $activityModel
                ->where('user_id', $userId)
                ->where('course_id', $courseId)
                ->first();

            if ($existing) {
                $activityModel->update($existing['activity_id'], [
                    'last_accessed_at' => date('Y-m-d H:i:s')
                ]);
            } else {
                $activityModel->insert([
                    'user_id' => $userId,
                    'course_id' => $courseId,
                    'last_accessed_at' => date('Y-m-d H:i:s')
                ]);
            }
        }

        // Ambil ID 3 aktivitas terbaru
        $recent = $activityModel
            ->select('activity_id')
            ->where('user_id', $userId)
            ->orderBy('last_accessed_at', 'DESC')
            ->limit(3)
            ->findAll();

        $keepIds = array_column($recent, 'activity_id');

        // Hapus aktivitas lain yang melebihi 3 terakhir
        $builder = $activityModel->builder();
        $builder->where('user_id', $userId)
            ->whereNotIn('activity_id', $keepIds)
            ->delete();

        return view('user/course', $data);
    }
}
