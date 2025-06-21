<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumPostModel extends Model
{
    protected $table = 'tbl_forum_posts';
    protected $primaryKey = 'post_id';
    protected $allowedFields = ['thread_id', 'user_id', 'content', 'created_at'];
}
