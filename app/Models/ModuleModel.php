<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuleModel extends Model
{
    protected $table = 'tbl_modules';
    protected $allowedFields = ['course_id', 'module_number', 'title', 'content', 'video_url'];
    public $primaryKey = ['course_id', 'module_number'];
    public $useAutoIncrement = false;
}
