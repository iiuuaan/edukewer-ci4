<?php

namespace App\Controllers;

use App\Models\QuizQuestionsModel;

class QuizController extends BaseController
{
    public function view($courseId, $moduleNumber)
    {

        $model = new QuizQuestionsModel();
        $quizModel = new \App\Models\QuizzesModel();
        $quiz = $quizModel
            ->where([
                'course_id' => $courseId,
                'module_number' => $moduleNumber
            ])
            ->first();

        $questions = $model
            ->where([
                'course_id' => $courseId,
                'module_number' => $moduleNumber
            ])
            ->findAll();

        session()->set('quiz_start_time', time());
        $startTime = session()->get('quiz_start_time');
        $timeLimit = 15 * 60; // 15 menit
        $timeRemaining = max(0, $timeLimit - (time() - $startTime));

        return view('user/quizView', [
            'quiz' => $quiz,
            'questions' => $questions,
            'courseId' => $courseId,
            'moduleNumber' => $moduleNumber,
            'timeRemaining' => $timeRemaining
        ]);
    }

    public function submit($courseId, $moduleNumber)
    {

        $submittedAnswers = $this->request->getPost('answers'); // key = question_id, value = selected option
        $model = new \App\Models\QuizQuestionsModel();

        // Ambil semua soal untuk course dan modul terkait
        $questions = $model
            ->where('course_id', $courseId)
            ->where('module_number', $moduleNumber)
            ->findAll();


        $score = 0;
        $total = count($questions); // jumlah soal dari database

        foreach ($questions as $q) {
            $questionId = $q['id'];
            $correct = $q['correct_option'];
            $userAnswer = $submittedAnswers[$questionId] ?? null;

            if ($userAnswer && $userAnswer === $correct) {
                $score++;
            }
        }

        session()->set('submittedAnswers', $submittedAnswers);

        return view('user/quizResultView', [
            'score' => $score,
            'total' => $total,
            'courseId' => $courseId,
            'moduleNumber' => $moduleNumber
        ]);
    }

    public function review($courseId, $moduleNumber)
    {

        $model = new \App\Models\QuizQuestionsModel();
        $questions = $model
            ->where([
                'course_id' => $courseId,
                'module_number' => $moduleNumber
            ])
            ->findAll();

        $submittedAnswers = session()->get('submittedAnswers'); // dari session
        $score = 0;

        foreach ($questions as $q) {
            $userAnswer = $submittedAnswers[$q['id']] ?? null;
            if ($userAnswer === $q['correct_option']) {
                $score++;
            }
        }

        return view('user/quizReviewView', [
            'questions' => $questions,
            'submittedAnswers' => $submittedAnswers,
            'score' => $score,
            'total' => count($questions),
            'courseId' => $courseId,
            'moduleNumber' => $moduleNumber,
        ]);
    }
}
