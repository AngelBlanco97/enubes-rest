<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBedroomImagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'bedroom_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'order' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('bedroom_id', 'bedrooms', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('bedroom_images');
    }

    public function down()
    {
        $this->forge->dropTable('bedroom_images');
    }
}
