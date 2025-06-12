<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizQuestionsModel extends Model
{
    protected $table = 'tbl_quiz_questions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'course_id', 'module_number', 'question', 'option_a', 'option_b', 'option_c', 'correct_option'];
}
