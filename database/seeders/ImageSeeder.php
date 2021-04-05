<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(
            [
                'product_id'    => '1',
                'Image'         => 'https://homepages.cae.wisc.edu/~ece533/images/airplane.png'
            ],
            [
                'product_id'    => '1',
                'Image'         => 'https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/v1555319514/shape/mentalfloss/snakeshed.jpg?itok=ALFAVh6y'
            ],
            [
                'product_id'    => '1',
                'Image'         => 'https://bloximages.newyork1.vip.townnews.com/thesuburban.com/content/tncms/assets/v3/editorial/c/08/c084458b-ae0b-5716-bcb6-db8c037186ba/5ba92c017a795.image.jpg?resize=1200%2C711'
            ],
            [
                'product_id'    => '2',
                'Image'         => 'https://homepages.cae.wisc.edu/~ece533/images/baboon.png'
            ],
            [
                'product_id'    => '2',
                'Image'         => 'https://homepages.cae.wisc.edu/~ece533/images/peppers.png'
            ],
            [
                'product_id'    => '3',
                'Image'         => 'https://www.boltdepot.com/images/catalog/hex-bolt-standard.gif'
            ],
            [
                'product_id'    => '3',
                'Image'         => 'https://www.boltdepot.com/images/dimensions/hex-cap-screw-full-thread-dimensions.gif'
            ],
            [
                'product_id'    => '3',
                'Image'         => 'https://www.boltdepot.com/images/dimensions/hex-bolt-head-dimensions.gif'
            ],
            [
                'product_id'    => '4',
                'Image'         => 'https://www.conexed.com/wp-content/uploads/2019/09/logo273x55.png'
            ],
        );
    }
}
