<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizzesModel extends Model
{
    protected $table = 'tbl_quizzes';
    protected $allowedFields = ['course_id', 'module_number', 'title', 'description', 'duration_minutes'];
    public $primaryKey = 'id';
}
