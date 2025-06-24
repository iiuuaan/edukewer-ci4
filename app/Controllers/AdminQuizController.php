<?php

namespace App\Controllers;

use App\Models\QuizzesModel;
use App\Models\QuizQuestionsModel;

class AdminQuizController extends BaseController
{

    public function view($courseId, $moduleNumber, $quizId)
    {
        $quizModel = new QuizzesModel();
        $questionModel = new QuizQuestionsModel();

        $questions = $questionModel
            ->where('course_id', $courseId)
            ->where('module_number', $moduleNumber)
            ->findAll();

        if (empty($questions)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No questions found for this quiz.');
        }

        $quiz = $quizModel->find($quizId);

        return view('admin/view_quiz_detail', [
            'quiz' => $quiz,
            'questions' => $questions,
            'courseId' => $courseId,
            'moduleNumber' => $moduleNumber,
        ]);
    }

public function create($courseId, $moduleNumber)
{
    $quizModel = new \App\Models\QuizzesModel();

    $quizModel->insert([
        'course_id' => $courseId,
        'module_number' => $moduleNumber,
        'title' => 'New Quiz',
        'description' => 'Description here'
    ]);

    return redirect()->to(site_url("admin/modules/view/$courseId/$moduleNumber")); // Reload halaman
}


public function addQuestion($courseId, $moduleNumber, $quizId)
{
    $data = [
        'course_id'     => $courseId,
        'module_number' => $moduleNumber,
        'question'      => $this->request->getPost('question'),
        'option_a'      => $this->request->getPost('option_a'),
        'option_b'      => $this->request->getPost('option_b'),
        'option_c'      => $this->request->getPost('option_c'),
        'correct_option'=> $this->request->getPost('correct_option'),
    ];

    $questionModel = new \App\Models\QuizQuestionsModel();
    $questionModel->insert($data);

    return redirect()->to("admin/quiz/$courseId/$moduleNumber/$quizId");
}


    public function update($courseId, $moduleNumber, $quizId)
    {
        $questionModel = new QuizQuestionsModel();

    if ($this->request->getPost('delete_question')) {
        $qId = $this->request->getPost('delete_question');
        $questionModel->delete($qId);
        return redirect()->to("admin/quiz/$courseId/$moduleNumber/$quizId")->with('success', 'Pertanyaan berhasil dihapus.');
    }
        $questions = $this->request->getPost('questions');

        foreach ($questions as $qId => $data) {
            $questionModel->update($qId, [
                'question' => $data['question'],
                'option_a' => $data['option_a'],
                'option_b' => $data['option_b'],
                'option_c' => $data['option_c'],
                'correct_option'  => $data['correct_option'] ?? null, // tambahkan ini
            ]);
        }

        return redirect()->to("admin/quiz/$courseId/$moduleNumber/$quizId")->with('success', 'Pertanyaan berhasil diperbarui.');

    }

public function delete($courseId, $moduleNumber, $quizId, $questionId)
{
    $model = new QuizQuestionsModel();
    $model->delete($questionId);

    return redirect()->to("admin/quiz/$courseId/$moduleNumber/$quizId")->with('success', 'Pertanyaan berhasil dihapus.');
}

}
