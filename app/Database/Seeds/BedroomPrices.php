<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BedroomPrices extends Seeder
{
    public function run()
    {
        $roomPrices = [
            ['bedroom_id' => 1, 'price_per_day' => 100.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 2, 'price_per_day' => 150.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 3, 'price_per_day' => 90.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 4, 'price_per_day' => 180.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 5, 'price_per_day' => 120.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 6, 'price_per_day' => 200.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 7, 'price_per_day' => 80.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 8, 'price_per_day' => 130.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 9, 'price_per_day' => 170.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 10, 'price_per_day' => 140.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 11, 'price_per_day' => 120.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 12, 'price_per_day' => 180.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 13, 'price_per_day' => 90.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 14, 'price_per_day' => 220.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 15, 'price_per_day' => 130.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 16, 'price_per_day' => 250.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 17, 'price_per_day' => 85.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 18, 'price_per_day' => 140.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 19, 'price_per_day' => 170.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 20, 'price_per_day' => 140.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 21, 'price_per_day' => 120.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 22, 'price_per_day' => 180.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 23, 'price_per_day' => 90.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 24, 'price_per_day' => 220.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 25, 'price_per_day' => 130.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 26, 'price_per_day' => 250.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 27, 'price_per_day' => 85.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 28, 'price_per_day' => 140.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 29, 'price_per_day' => 170.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 30, 'price_per_day' => 140.00, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        $this->db->table('bedroom_prices')->insertBatch($roomPrices);
    }
}
