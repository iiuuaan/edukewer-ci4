<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ForumSeeder extends Seeder
{
    public function run()
    {
        // Thread 1
        $this->db->table('tbl_forum_threads')->insert([
            'user_id'       => 1,
            'course_id'     => 1,
            'module_number' => 1,
            'title'         => 'Diskusi Variabel',
            'content'       => 'Saya tidak paham tentang penggunaan variabel dalam PHP.',
            'created_at'    => date('Y-m-d H:i:s'),
        ]);

        // Ambil thread_id terakhir
        $threadID = $this->db->insertID();

        // Posts
        $this->db->table('tbl_forum_posts')->insertBatch([
            [
                'thread_id'  => $threadID,
                'user_id'    => 2,
                'content'    => 'Variabel di PHP diawali dengan tanda $ dan bisa menyimpan berbagai jenis data.',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'thread_id'  => $threadID,
                'user_id'    => 3,
                'content'    => 'Coba cek dokumentasi di PHP.net, sangat lengkap.',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
