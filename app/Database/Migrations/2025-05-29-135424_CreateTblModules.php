<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblModules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_id'   => ['type' => 'INT', 'unsigned' => true, 'constraint' => 11],
            'module_number'=> ['type' => 'INT', 'unsigned' => true, 'constraint' => 11],
            'title'       => ['type' => 'VARCHAR', 'constraint' => 100],
            'content'     => ['type' => 'TEXT', 'null' => true],
            'video_url'   => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        ]);
        $this->forge->addKey(['course_id', 'module_number'], true); // Composite Primary Key
        $this->forge->addForeignKey('course_id', 'tbl_courses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_modules');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_modules');
    }
}