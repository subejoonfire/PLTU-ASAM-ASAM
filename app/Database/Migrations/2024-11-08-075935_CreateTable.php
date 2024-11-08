<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVibeCheckTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'acceleration' => [
                'type'       => 'FLOAT',
                'default'    => 0.000
            ],
            'velocity' => [
                'type'       => 'FLOAT',
                'default'    => 0.000
            ],
            'demodulation' => [
                'type'       => 'FLOAT',
                'default'    => 0.0000
            ],
            'custom_value' => [
                'type'       => 'FLOAT',
                'default'    => 0.0
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('vibecheck');
    }

    public function down()
    {
        $this->forge->dropTable('vibecheck');
    }
}
