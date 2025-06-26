<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class userQuizResultsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 2,
                'course_id' => 1,
                'module_number'     => 1,
                'score'     => 10,
                'completed_at'     => '2025-06-24 12:32:34',
            ],
            [
                'user_id' => 2,
                'course_id' => 1,
                'module_number'     => 2,
                'score'     => 10,
                'completed_at'     => '2025-06-24 17:32:34',
            ],
            [
                'user_id' => 2,
                'course_id' => 1,
                'module_number'     => 3,
                'score'     => 10,
                'completed_at'     => '2025-06-25 12:32:34',
            ],
            [
                'user_id' => 2,
                'course_id' => 2,
                'module_number'     => 1,
                'score'     => 10,
                'completed_at'     => '2025-06-26 12:32:34',
            ],
            [
                'user_id' => 3,
                'course_id' => 1,
                'module_number'     => 1,
                'score'     => 10,
                'completed_at'     => '2025-06-24 12:32:34',
            ],
        ];

        // Menggunakan insertBatch untuk insert banyak sekaligus
        $this->db->table('tbl_user_quiz_results')->insertBatch($data);
    }
}
