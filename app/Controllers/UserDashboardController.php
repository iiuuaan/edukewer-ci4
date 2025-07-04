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

        $enrollmentModel = new \App\Models\EnrollmentModel();

        $enrollments = $enrollmentModel
            ->where('user_id', $userId)
            ->findAll();

        $enrolledCourses = [];
        foreach ($enrollments as $enrollment) {
            $course = $courseModel->find($enrollment['course_id']);
            if ($course) {
                $enrolledCourses[] = $course;
            }
        }


        return view('user/dashboard', [
            'lastCourses' => $lastCourses,
            'courses' => $enrolledCourses
        ]);
    }

    public function course(): string
    {
        $data['username'] = session()->get('username');
        return view('user/course', $data);
    }

    public function profile()
    {
        $userId = session()->get('user_id');

        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($userId);

        return view('user/profileView', ['user' => $user]);
    }

    public function updateProfile()
    {
        $userId = session()->get('user_id');

        $userModel = new \App\Models\UserModel();
        $userModel->update($userId, [
            'username' => $this->request->getPost('username'),
        ]);

        session()->setFlashdata('success', 'Profil berhasil diperbarui!');
        return redirect()->to('user/dashboard/profile');
    }
    public function changePassword()
    {
        $userId = session()->get('user_id');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($userId);

        $oldPassword = $this->request->getPost('old_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if (!password_verify($oldPassword, $user['password'])) {
            session()->setFlashdata('password_error', 'Current password is incorrect.');
            return redirect()->to('user/dashboard/profile');
        }

        if ($newPassword !== $confirmPassword) {
            session()->setFlashdata('password_error', 'New passwords do not match.');
            return redirect()->to('user/dashboard/profile');
        }

        $userModel->update($userId, [
            'password' => password_hash($newPassword, PASSWORD_DEFAULT)
        ]);

        session()->setFlashdata('password_success', 'Password has been changed successfully.');
        return redirect()->to('user/dashboard/profile');
    }

    public function getMyCertificate()
    {
        $userId = session()->get('user_id');

        $enrollmentModel = new \App\Models\EnrollmentModel();
        $quizModel = new \App\Models\QuizzesModel();
        $userQuizResultModel = new \App\Models\UserQuizResultModel();
        $courseModel = new \App\Models\CourseModel();

        // Ambil semua course yang diikuti user
        $enrollments = $enrollmentModel
            ->where('user_id', $userId)
            ->findAll();

        $completedCourses = [];

        foreach ($enrollments as $enrollment) {
            $courseId = $enrollment['course_id'];

            $totalQuiz = $quizModel
                ->where('course_id', $courseId)
                ->countAllResults();

            $completedQuiz = $userQuizResultModel
                ->where('user_id', $userId)
                ->where('course_id', $courseId)
                ->countAllResults();

            $progress = ($totalQuiz > 0) ? round(($completedQuiz / $totalQuiz) * 100) : 0;

            if ($progress == 100) {
                $course = $courseModel->find($courseId);
                if ($course) {
                    $course['progress'] = $progress;
                    $completedCourses[] = $course;
                }
            }
        }

        return view('user/completed_courses', [
            'courses' => $completedCourses
        ]);
    }
    public function showCertificate()
    {
        $userId = session()->get('user_id');
        $courseId = $this->request->getGet('course_id');

        if (!$userId || !$courseId) {
            return redirect()->to('user/dashboard');
        }

        $userModel = new \App\Models\UserModel();
        $courseModel = new \App\Models\CourseModel();

        $user = $userModel->find($userId);
        $course = $courseModel->find($courseId);

        if (!$user || !$course) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("User atau course tidak ditemukan.");
        }

        return view('user/certificate_view', [
            'user' => $user,
            'course' => $course
        ]);
    }
}
