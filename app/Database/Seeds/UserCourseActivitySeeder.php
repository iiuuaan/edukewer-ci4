<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserCourseActivitySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 2,
                'course_id' => 1,
                'last_accessed_at' => Time::now('Asia/Makassar', 'en_US'),
            ],
            [
                'user_id' => 2,
                'course_id' => 2,
                'last_accessed_at' => Time::now('Asia/Makassar', 'en_US')->subDays(1),
            ],
            [
                'user_id' => 3,
                'course_id' => 1,
                'last_accessed_at' => Time::now('Asia/Makassar', 'en_US')->subHours(2),
            ],
        ];

        // Insert batch
        $this->db->table('tbl_user_course_activity')->insertBatch($data);
    }
}
