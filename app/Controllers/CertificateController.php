<?php

namespace App\Controllers;


class CertificateController extends BaseController
{

    public function showCertificate($courseId)
    {
        $userId = session()->get('user_id');

        $moduleModel = new \App\Models\ModuleModel();
        $quizModel = new \App\Models\UserQuizResultModel();

        $totalModules = $moduleModel->where('course_id', $courseId)->countAllResults();

        $completedQuizzes = $quizModel
            ->where('user_id', $userId)
            ->where('course_id', $courseId)
            ->groupBy('module_number')
            ->countAllResults();

        if ($completedQuizzes >= $totalModules) {
            return view('user/certificate', [
                'studentName' => session()->get('username'),
                'courseName' => $this->getCourseName($courseId),
                'completionDate' => date('Y-m-d')
            ]);
        } else {
            return redirect()->to('user/dashboard')->with('error', 'You must complete all quizzes in this course.');
        }
    }

    public function getCourseName($courseId)
    {
        $modelCourse = new \App\Models\CourseModel();
        $courseName = $modelCourse->find($courseId);
        return $courseName ? $courseName['title'] : 'Unknown Course';
    }
}
