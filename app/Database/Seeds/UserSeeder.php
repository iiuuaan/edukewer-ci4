<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => '$2y$10$atWkdJvUCVBAjFqsJNO1I.irSBGVz6SqhgikmD4U8iJhD7CU1Ccxa',
                'role'     => 'admin',
            ],
            [
                'username' => 'raja',
                'password' => '$2y$10$unemPXd9b54s1NXq4w.XXuWvYu0TseA9oQwZ8PD07aMQeoY.4uFh.',
                'role'     => 'user',
            ],
            [
                'username' => 'iwan',
                'password' => '$2y$10$b6yXiF3KX82vbGrFF9YW3eN/0Xa4TRY/TaF//MEZn.QjyKMF6F9ci',
                'role'     => 'user',
            ],
            [
                'username' => 'arif',
                'password' => '$2y$10$nGSQg8NfpITA0hwDZNi6l.IsdE1NelqZ1jBAghQ5vRsHy/NeCwtoS',
                'role'     => 'user',
            ],
        ];

        // Menggunakan insertBatch untuk insert banyak sekaligus
        $this->db->table('tbl_users')->insertBatch($data);
    }
}
