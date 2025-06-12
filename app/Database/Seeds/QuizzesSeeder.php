<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QuizzesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'             => '1',
                'course_id'      => '1',
                'module_number'  => '1',
                'title'          => 'Konsep Dasar Pemrograman',
            ],
            [
                'id'             => '2',
                'course_id'      => '1',
                'module_number'  => '2',
                'title'          => 'Struktur Kontrol',
            ],
            [
                'id'             => '3',
                'course_id'      => '1',
                'module_number'  => '3',
                'title'          => 'Variabel dan Tipe Data',
            ],
            [
                'id'             => '4',
                'course_id'      => '2',
                'module_number'  => '1',
                'title'          => 'Dasar HTML',
            ],
            [
                'id'             => '5',
                'course_id'      => '2',
                'module_number'  => '2',
                'title'          => 'Dasar CSS',
            ],
            [
                'id'             => '6',
                'course_id'      => '2',
                'module_number'  => '3',
                'title'          => 'Dasar JavaScript',
            ],
            [
                'id'             => '7',
                'course_id'      => '3',
                'module_number'  => '1',
                'title'          => 'Algoritma Pencarian dan Pengurutan',
            ],
            [
                'id'             => '8',
                'course_id'      => '3',
                'module_number'  => '2',
                'title'          => 'Kompleksitas Waktu',
            ],
            [
                'id'             => '9',
                'course_id'      => '3',
                'module_number'  => '3',
                'title'          => 'Struktur Data Dasar',
            ],
            [
                'id'             => '10',
                'course_id'      => '4',
                'module_number'  => '1',
                'title'          => 'Bahasa dalam SQL',
            ],
            [
                'id'             => '11',
                'course_id'      => '4',
                'module_number'  => '2',
                'title'          => 'Konsep Dasar Database',
            ],
            [
                'id'             => '12',
                'course_id'      => '4',
                'module_number'  => '3',
                'title'          => 'Query Lanjutan SQL',
            ],

        ];

        $this->db->table('tbl_quizzes')->insertBatch($data);
    }
}
