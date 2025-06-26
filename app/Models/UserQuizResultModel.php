<?php

namespace App\Models;

use CodeIgniter\Model;

class UserQuizResultModel extends Model
{
    protected $table            = 'tbl_user_quiz_results';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['user_id', 'course_id', 'module_number', 'score', 'completed_at'];
}
