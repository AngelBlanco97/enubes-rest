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
            'password' => password_hash('Test123', PASSWORD_DEFAULT),
        ];
    }
}
