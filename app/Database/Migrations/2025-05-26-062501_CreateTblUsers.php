<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblUsers extends Migration
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
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'unique'     => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'role' => [
                'type'       => 'ENUM',
                'constraint' => ['admin', 'user'],
                'default'    => 'user',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_users');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_users');
    }

}
