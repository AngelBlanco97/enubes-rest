<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBedroomsTable extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'square_meters' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'num_bathrooms' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'chimney' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'terrace' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'available_smoke_detector' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'wifi' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'tv' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'heating' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'parking_lot' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'adapted_use' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'bedrooms_type_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
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
        $this->forge->addForeignKey('bedrooms_type_id', 'bedrooms_type', 'id');
        $this->forge->addKey('id', true);
        $this->forge->createTable('bedrooms');
    }

    public function down()
    {
        //
    }
}
