<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Course 1
            ['course_id' => 1, 'module_number' => 1, 'title' => 'Pengenalan', 'content' => '<p>Materi ini membahas pengenalan konsep dasar pemrograman.</p>',              'video_url' => 'https://www.youtube.com/embed/zOjov-2OZ0E'],
            ['course_id' => 1, 'module_number' => 2, 'title' => 'Variabel dan Tipe Data', 'content' => '<p>Materi ini membahas tentang menyimpan dan mengelola data.</p>', 'video_url' => 'https://www.youtube.com/embed/1oN7JxLTVzA?si=H9VKHl8IRX-6oYIO'],
            ['course_id' => 1, 'module_number' => 3, 'title' => 'Struktur Kontrol', 'content' => '<p>Materi ini membahas tentang percabangan dan perulangan.</p>',         'video_url' => 'https://www.youtube.com/embed/5jrItmCBvKE?si=ZTmOO10A6pm-EjhG'],

            // Course 2
            ['course_id' => 2, 'module_number' => 1, 'title' => 'HTML', 'content' => '<p>Materi ini membahas struktur dasar HTML dan Elemen Dasar.</p>',   'video_url' => 'https://www.youtube.com/embed/NBZ9Ro6UKV8?si=XN5AOrthoYABiIqF'],
            ['course_id' => 2, 'module_number' => 2, 'title' => 'CSS', 'content' => '<p>Materi ini membahas cara styling web menggunakan CSS.</p>',        'video_url' => 'https://www.youtube.com/embed/CleFk3BZB3g?si=pGSULYZ80rvNAJx0'],
            ['course_id' => 2, 'module_number' => 3, 'title' => 'JavaScript', 'content' => '<p>Materi ini membahas Interaktivitas dengan JavaScript.</p>', 'video_url' => 'https://www.youtube.com/embed/SDROba_M42g?si=RM0dsTfCTl3cnkxS'],

            // Course 3
            ['course_id' => 3, 'module_number' => 1, 'title' => 'Struktur Data Dasar', 'content' => '<p>Materi ini membahas tentang Array, List, dan Stack.</p>',                                   'video_url' => 'https://www.youtube.com/embed/q04buHDFT6M?si=0cMsW5QABDSKJZh8'],
            ['course_id' => 3, 'module_number' => 2, 'title' => 'Algoritma Pencarian dan Pengurutan', 'content' => '<p>Materi ini membahas tentang Linear Search, Binary Search, Bubble Sort.</p>', 'video_url' => 'https://www.youtube.com/embed/FWslGmwFKlM?si=s3mDOVOLpRTWEkoR'],
            ['course_id' => 3, 'module_number' => 3, 'title' => 'Kompleksitas Waktu', 'content' => '<p>Materi ini membahas tentang kompleksitas waktu.</p>',                                        'video_url' => 'https://www.youtube.com/embed/dkKvYcwwQBg?si=MLTz-c8jEQRAzLmN'],

            // Course 4
            ['course_id' => 4, 'module_number' => 1, 'title' => 'Konsep Dasar Database', 'content' => '<p>Materi ini membahas Relational Model dan ERD.</p>', 'video_url' => 'https://www.youtube.com/embed/FrhBf09yb18?si=8WZ-UG6GCRqbILe2'],
            ['course_id' => 4, 'module_number' => 2, 'title' => 'Bahasa Dalam SQL', 'content' => '<p>Materi ini membahas tentang Data Definition Language, Data Manipulation Language, dan Data Control Language.</p>', 'video_url' => 'https://www.youtube.com/embed/Wc2h1ywyr88?si=MMDDSzRyPIPkestW'],
            ['course_id' => 4, 'module_number' => 3, 'title' => 'Query Lanjutan', 'content' => '<p>Materi ini membahas tentang query lanjutan pada SQL.</p>', 'video_url' => 'https://www.youtube.com/embed/b8eyrMt2nlE?si=nSkAeSESIRZgXjkM'],
        ];

        $this->db->table('tbl_modules')->insertBatch($data);
    }
}
