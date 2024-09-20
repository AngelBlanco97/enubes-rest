<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BedroomImages extends Seeder
{
    public function run()
    {
        $image1Url = 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
        $image2Url = 'https://images.pexels.com/photos/97083/pexels-photo-97083.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
        $image3Url = 'https://images.pexels.com/photos/3688261/pexels-photo-3688261.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
        $image4Url = 'https://images.pexels.com/photos/12277283/pexels-photo-12277283.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';
        $image5Url = 'https://images.pexels.com/photos/12870186/pexels-photo-12870186.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1';

        $images = [
            ['bedroom_id' => 1, 'url' => $image1Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 1, 'url' => $image2Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 1, 'url' => $image3Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 1, 'url' => $image4Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 1, 'url' => $image5Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 2, 'url' => $image1Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 2, 'url' => $image2Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 2, 'url' => $image3Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 2, 'url' => $image4Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 2, 'url' => $image5Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 3, 'url' => $image1Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 3, 'url' => $image2Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 3, 'url' => $image3Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 3, 'url' => $image4Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 3, 'url' => $image5Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 4, 'url' => $image1Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 4, 'url' => $image2Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 4, 'url' => $image3Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 4, 'url' => $image4Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 4, 'url' => $image5Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 5, 'url' => $image1Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 5, 'url' => $image2Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 5, 'url' => $image3Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 5, 'url' => $image4Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 5, 'url' => $image5Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 6, 'url' => $image1Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 6, 'url' => $image2Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 6, 'url' => $image3Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 6, 'url' => $image4Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 6, 'url' => $image5Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 7, 'url' => $image1Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 7, 'url' => $image2Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 7, 'url' => $image3Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 7, 'url' => $image4Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 7, 'url' => $image5Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 8, 'url' => $image1Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 8, 'url' => $image2Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 8, 'url' => $image3Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 8, 'url' => $image4Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 8, 'url' => $image5Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 9, 'url' => $image1Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 9, 'url' => $image2Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 9, 'url' => $image3Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 9, 'url' => $image4Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 9, 'url' => $image5Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 10, 'url' => $image1Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 10, 'url' => $image2Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 10, 'url' => $image3Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 10, 'url' => $image4Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 10, 'url' => $image5Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 11, 'url' => $image1Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 11, 'url' => $image2Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 11, 'url' => $image3Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 11, 'url' => $image4Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 11, 'url' => $image5Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 12, 'url' => $image1Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 12, 'url' => $image2Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 12, 'url' => $image3Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 12, 'url' => $image4Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 12, 'url' => $image5Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 13, 'url' => $image1Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 13, 'url' => $image2Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 13, 'url' => $image3Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 13, 'url' => $image4Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 13, 'url' => $image5Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 14, 'url' => $image1Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 14, 'url' => $image2Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 14, 'url' => $image3Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 14, 'url' => $image4Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 14, 'url' => $image5Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 15, 'url' => $image1Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 15, 'url' => $image2Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 15, 'url' => $image3Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 15, 'url' => $image4Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 15, 'url' => $image5Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 16, 'url' => $image1Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 16, 'url' => $image2Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 16, 'url' => $image3Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 16, 'url' => $image4Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 16, 'url' => $image5Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 17, 'url' => $image1Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 17, 'url' => $image2Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 17, 'url' => $image3Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 17, 'url' => $image4Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 17, 'url' => $image5Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 18, 'url' => $image1Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 18, 'url' => $image2Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 18, 'url' => $image3Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 18, 'url' => $image4Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 18, 'url' => $image5Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 19, 'url' => $image1Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 19, 'url' => $image2Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 19, 'url' => $image3Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 19, 'url' => $image4Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 19, 'url' => $image5Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 20, 'url' => $image1Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 20, 'url' => $image2Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 20, 'url' => $image3Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 20, 'url' => $image4Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 20, 'url' => $image5Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 21, 'url' => $image1Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 21, 'url' => $image2Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 21, 'url' => $image3Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 21, 'url' => $image4Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 21, 'url' => $image5Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 22, 'url' => $image1Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 22, 'url' => $image2Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 22, 'url' => $image3Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 22, 'url' => $image4Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 22, 'url' => $image5Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 23, 'url' => $image1Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 23, 'url' => $image2Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 23, 'url' => $image3Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 23, 'url' => $image4Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 23, 'url' => $image5Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 24, 'url' => $image1Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 24, 'url' => $image2Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 24, 'url' => $image3Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 24, 'url' => $image4Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 24, 'url' => $image5Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 25, 'url' => $image1Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 25, 'url' => $image2Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 25, 'url' => $image3Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 25, 'url' => $image4Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 25, 'url' => $image5Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 26, 'url' => $image1Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 26, 'url' => $image2Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 26, 'url' => $image3Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 26, 'url' => $image4Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 26, 'url' => $image5Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 27, 'url' => $image1Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 27, 'url' => $image2Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 27, 'url' => $image3Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 27, 'url' => $image4Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 27, 'url' => $image5Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 28, 'url' => $image1Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 28, 'url' => $image2Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 28, 'url' => $image3Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 28, 'url' => $image4Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 28, 'url' => $image5Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 29, 'url' => $image1Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 29, 'url' => $image2Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 29, 'url' => $image3Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 29, 'url' => $image4Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 29, 'url' => $image5Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],

            ['bedroom_id' => 30, 'url' => $image1Url, 'order' => 1, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 30, 'url' => $image2Url, 'order' => 2, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 30, 'url' => $image3Url, 'order' => 3, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 30, 'url' => $image4Url, 'order' => 4, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['bedroom_id' => 30, 'url' => $image5Url, 'order' => 5, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];

        $this->db->table('bedroom_images')->insertBatch($images);
    }
}
