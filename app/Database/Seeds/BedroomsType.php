<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BedroomsType extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Single Room',
                'nice_name' => 'Habitación Individual',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Double Room',
                'nice_name' => 'Habitación Doble',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Suite',
                'nice_name' => 'Suite de Lujo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('bedrooms_type')->insertBatch($data);
    }
}
