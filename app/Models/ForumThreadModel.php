<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumThreadModel extends Model
{
    protected $table = 'tbl_forum_threads';
    protected $primaryKey = 'thread_id';
    protected $allowedFields = ['user_id', 'course_id', 'module_number', 'title', 'content', 'created_at'];
}

