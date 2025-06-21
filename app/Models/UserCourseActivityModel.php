<?php

namespace App\Models;

use CodeIgniter\Model;

class UserCourseActivityModel extends Model
{
    protected $table = 'tbl_user_course_activity';
    protected $primaryKey = 'activity_id';
    protected $allowedFields = ['user_id', 'course_id', 'last_accessed_at'];
    public $useTimestamps = false;
}
