<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblUserQuizResult extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'auto_increment' => true],
            'user_id' => ['type' => 'INT', 'unsigned' => true],
            'course_id' => ['type' => 'INT', 'unsigned' => true],
            'module_number' => ['type' => 'INT', 'unsigned' => true],
            'score' => ['type' => 'INT', 'unsigned' => true],
            'completed_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_user_quiz_results');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user_quiz_results');
    }
}
