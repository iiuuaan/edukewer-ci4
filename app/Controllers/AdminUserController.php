<?php

namespace App\Controllers;

class AdminUserController extends BaseController
{
    public function index()
    {
        $model = new \App\Models\UserModel();
        $users = $model->findAll();

        return view('admin/manage_users', ['users' => $users]);
    }

    public function update($id)
    {
        $model = new \App\Models\UserModel();

        $data = ['username' => $this->request->getPost('username')];

        $model->update($id, $data);

        return redirect()->to(site_url('admin/users'))->with('message', 'User updated.');
    }

    public function delete($id)
    {
        $model = new \App\Models\UserModel();

        if (!$model->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("User with ID $id not found.");
        }

        $model->delete($id);

        return redirect()->to(site_url('admin/users'))->with('message', 'User deleted successfully.');
    }

    public function courses($userId)
    {
        $userModel = new \App\Models\UserModel();
        $enrollmentModel = new \App\Models\EnrollmentModel();
        $courseModel = new \App\Models\CourseModel();
        $quizModel = new \App\Models\QuizzesModel(); // pakai model quiz dari Anda
        $userQuizResultModel = new \App\Models\UserQuizResultModel();

        $user = $userModel->find($userId);
        if (!$user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("User not found");
        }

        $enrollments = $enrollmentModel
            ->where('user_id', $userId)
            ->findAll();

        $courseIds = array_column($enrollments, 'course_id');

        $courses = [];
        if (!empty($courseIds)) {
            $courses = $courseModel
                ->whereIn('id', $courseIds)
                ->findAll();

            foreach ($courses as &$course) {
                // Jumlah total quiz di course ini
                $totalQuiz = $quizModel
                    ->where('course_id', $course['id'])
                    ->countAllResults();

                // Jumlah quiz yang telah diselesaikan oleh user di course ini
                $completedQuiz = $userQuizResultModel
                    ->where('user_id', $userId)
                    ->where('course_id', $course['id'])
                    ->countAllResults();

                // Hitung progress sebagai persen
                $course['progress'] = $totalQuiz > 0
                    ? round(($completedQuiz / $totalQuiz) * 100)
                    : 0;
            }
        }

        return view('admin/user_courses', [
            'user' => $user,
            'courses' => $courses
        ]);
    }
    public function courseScores($userId, $courseId)
    {
        $userModel           = new \App\Models\UserModel();
        $courseModel         = new \App\Models\CourseModel();
        $userQuizResultModel = new \App\Models\UserQuizResultModel();
        $quizModel           = new \App\Models\QuizzesModel();
        $questionModel = new \App\Models\QuizQuestionsModel();


        // Validasi user dan course
        $user   = $userModel->find($userId);
        $course = $courseModel->find($courseId);
        if (!$user || !$course) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data tidak ditemukan");
        }

        // Ambil semua hasil quiz user untuk course ini
        $results = $userQuizResultModel
            ->where('user_id', $userId)
            ->where('course_id', $courseId)
            ->orderBy('module_number', 'ASC')
            ->findAll();

        // Jika perlu, join dengan tbl_quizzes untuk ambil judul quiz
        foreach ($results as &$r) {
            $quiz = $quizModel
                ->where('course_id', $courseId)
                ->where('module_number', $r['module_number'])
                ->first();
            $r['quiz_title']   = $quiz['title'] ?? '-';
            $r['completed_at'] = date('d M Y H:i', strtotime($r['completed_at']));

            // Hitung jumlah pertanyaan secara manual
            $r['total_questions'] = $questionModel
                ->where('course_id', $courseId)
                ->where('module_number', $r['module_number'])
                ->countAllResults();
        }

        return view('admin/user_course_scores', [
            'user'    => $user,
            'course'  => $course,
            'results' => $results
        ]);
    }
}
