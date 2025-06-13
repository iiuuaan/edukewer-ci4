<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblEnrollments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'course_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'enrolled_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['active', 'completed'],
                'default'    => 'active',
            ],
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->addKey('user_id');
        $this->forge->addKey('course_id');

        $this->forge->addForeignKey('user_id', 'tbl_users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('course_id', 'tbl_courses', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('enrollments');
    }

    public function down()
    {
        $this->forge->dropTable('enrollments');
    }
}
