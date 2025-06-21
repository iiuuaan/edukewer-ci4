<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblUserCourseActivity extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'activity_id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
            ],
            'course_id' => [
                'type' => 'INT',
            ],
            'last_accessed_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('activity_id', true);
        $this->forge->createTable('tbl_user_course_activity');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user_course_activity');
    }
}
