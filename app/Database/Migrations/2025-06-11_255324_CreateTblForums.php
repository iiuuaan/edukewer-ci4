<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblForums extends Migration
{
    public function up()
    {
        // Table: forum_threads
        $this->forge->addField([
            'thread_id'      => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'user_id'        => ['type' => 'INT', 'unsigned' => true],
            'course_id'      => ['type' => 'INT', 'unsigned' => true],
            'module_number'  => ['type' => 'INT', 'unsigned' => true],
            'title'          => ['type' => 'VARCHAR', 'constraint' => 255],
            'content'        => ['type' => 'TEXT'],
            'created_at'     => ['type' => 'DATETIME', 'null' => false],
        ]);
        $this->forge->addKey('thread_id', true);
        $this->forge->createTable('tbl_forum_threads');

        // Table: forum_posts
        $this->forge->addField([
            'post_id'    => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'thread_id'  => ['type' => 'INT', 'unsigned' => true],
            'user_id'    => ['type' => 'INT', 'unsigned' => true],
            'content'    => ['type' => 'TEXT'],
            'created_at' => ['type' => 'DATETIME', 'null' => false],
        ]);
        $this->forge->addKey('post_id', true);
        $this->forge->createTable('tbl_forum_posts');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_forum_posts');
        $this->forge->dropTable('tbl_forum_threads');
    }
}
