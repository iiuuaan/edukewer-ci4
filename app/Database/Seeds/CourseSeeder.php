<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Introduction to Programming',
                'description' => 'Kursus ini memperkenalkan dasar-dasar pemrograman, termasuk variabel, tipe data, dan struktur kontrol. Cocok untuk pemula yang ingin memulai belajar coding dari awal.',
                'thumbnail' => ''
            ],
            [
                'id' => 2,
                'title' => 'Web Development Basics',
                'description' => 'Kursus ini memperkenalkan dasar-dasar cara membangun halaman web dari dasar menggunakan HTML, CSS, dan dasar JavaScript.',
                'thumbnail' => ''
            ],
            [
                'id' => 3,
                'title' => 'Data Structures and Algorithms Basics',
                'description' => 'Kursus ini memperkenalkan dasar-dasar sistem basis data dan bagaimana mengelola data menggunakan SQL.',
                'thumbnail' => ''
            ],
            [
                'id' => 4,
                'title' => 'Database Fundamentals',
                'description' => 'Kursus ini memperkenalkan dasar-dasar sistem basis data dan bagaimana mengelola data menggunakan SQL.',
                'thumbnail' => ''
            ]
        ];

        $this->db->table('tbl_courses')->insertBatch($data);
    }
}
