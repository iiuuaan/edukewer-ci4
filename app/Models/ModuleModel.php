<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuleModel extends Model
{
    protected $table = 'tbl_modules';
    protected $allowedFields = ['course_id', 'title', 'content', 'video_url'];
    protected $useTimestamps = false;
}
