<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblModules extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'course_id'  => ['type' => 'INT', 'unsigned' => true],
            'title'      => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'content'    => ['type' => 'TEXT', 'null' => true],
            'video_url'  => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('course_id', 'tbl_courses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tbl_modules');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_modules');
    }
}