<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert($this->generateClient());
    }


    public function generateClient()
    {
        $faker = Factory::create();

        return [
            'name' => 'Angel',
            'last_name' => 'Blanco',
            'email' => 'prueba@enubes.com',
            'phone' => $faker->phoneNumber,
            'password' => '$2y$10$sdz5IXAATgET8m34oYljVO4pLQ6IXi6L/hgaKPfq/GITNoq7x1Mae',
        ];
    }
}
