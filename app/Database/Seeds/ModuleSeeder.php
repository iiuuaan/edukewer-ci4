<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Course 1
            ['course_id' => 1, 'title' => 'Pengenalan'],
            ['course_id' => 1, 'title' => 'Variabel dan Tipe Data'],
            ['course_id' => 1, 'title' => 'Struktur Kontrol'],

            // Course 2
            ['course_id' => 2, 'title' => 'HTML'],
            ['course_id' => 2, 'title' => 'CSS'],
            ['course_id' => 2, 'title' => 'JavaScript'],

            // Course 3
            ['course_id' => 3, 'title' => 'Struktur Data Dasar'],
            ['course_id' => 3, 'title' => 'Algoritma Pencarian dan Pengurutan'],
            ['course_id' => 3, 'title' => 'Kompleksitas Waktu'],

            // Course 4
            ['course_id' => 4, 'title' => 'Konsep Dasar Database'],
            ['course_id' => 4, 'title' => 'Bahasa Dalam SQL'],
            ['course_id' => 4, 'title' => 'Query Lanjutan'],
        ];

        $this->db->table('tbl_modules')->insertBatch($data);
    }
}
