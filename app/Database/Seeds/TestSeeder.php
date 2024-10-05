<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('ClientSeeder');
        $this->call('BedroomsType');
        $this->call('BedroomsSeeder');
        $this->call('BedroomPrices');
        $this->call('BedroomImages');
    }
}
