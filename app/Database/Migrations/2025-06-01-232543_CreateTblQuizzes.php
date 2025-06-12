<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblQuizzes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'course_id'      => ['type' => 'INT', 'unsigned' => true],
            'module_number'  => ['type' => 'INT', 'unsigned' => true],
            'title'          => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'description'    => ['type' => 'TEXT', 'null' => true],
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->addUniqueKey(['course_id', 'module_number']);
        // Foreign key to composite key (course_id, module_number) in tbl_modules
        $this->forge->addForeignKey(
            ['course_id', 'module_number'],
            'tbl_modules',
            ['course_id', 'module_number'],
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('tbl_quizzes');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_quizzes');
    }
}
