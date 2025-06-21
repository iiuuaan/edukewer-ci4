<?php

namespace App\Controllers;

class UserDashboardController extends BaseController
{
    public function index(): string
    {
        $userId = session()->get('user_id');

        // Ambil 3 kursus terakhir user
        $activityModel = new \App\Models\UserCourseActivityModel();
        $courseModel = new \App\Models\CourseModel();

        $recentActivities = $activityModel
            ->where('user_id', $userId)
            ->orderBy('last_accessed_at', 'DESC')
            ->limit(3)
            ->findAll();

        $lastCourses = [];
        foreach ($recentActivities as $activity) {
            $course = $courseModel->find($activity['course_id']);
            if ($course) {
                $lastCourses[] = $course;
            }
        }

        return view('user/dashboard', ['lastCourses' => $lastCourses]);
    }

    public function course(): string
    {
        $data['username'] = session()->get('username');
        return view('user/course', $data);
    }
}
