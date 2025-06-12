<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblQuizQuestions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'course_id'      => ['type' => 'INT', 'unsigned' => true],
            'module_number'  => ['type' => 'INT', 'unsigned' => true],
            'question'       => ['type' => 'TEXT', 'null' => false],
            'option_a'       => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'option_b'       => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'option_c'       => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => false],
            'correct_option' => ['type' => 'CHAR', 'constraint' => 1, 'null' => false], // A/B/C
        ]);

        $this->forge->addKey('id', true); // Primary key

        // Relasi ke tbl_quizzes (berdasarkan composite key course_id, module_number)
        $this->forge->addForeignKey(
            ['course_id', 'module_number'],
            'tbl_quizzes',
            ['course_id', 'module_number'],
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('tbl_quiz_questions');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_quiz_questions');
    }
}
