<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EnrollmentsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 3,
                'course_id' => 1,
                'enrolled_at'     => '2025-06-24 10:59:03',
                'status'     => 'active',
            ],
            [
                'user_id' => 2,
                'course_id' => 1,
                'enrolled_at'     => '2025-06-24 10:59:03',
                'status'     => 'active',
            ],
            [
                'user_id' => 2,
                'course_id' => 2,
                'enrolled_at'     => '2025-06-24 10:59:03',
                'status'     => 'active',
            ],
        ];

        // Menggunakan insertBatch untuk insert banyak sekaligus
        $this->db->table('tbl_enrollments')->insertBatch($data);
    }
}
