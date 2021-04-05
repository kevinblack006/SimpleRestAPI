<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'Name'          => '1234-M',
                'Description'   => 'Mystery Product - Good Luck',
                'Price'         => '83.12'
            ],
            [
                'Name'          => '6321',
                'Description'   => 'Fun Product with no real SKU naming convention',
                'Price'         => '12.99'
            ],
            [
                'Name'          => '1/4-20x3/4-HH-100',
                'Description'   => '100 pack of 1/4" Diameter, 3/4" Length, 20 Thread Hex Head Bolt',
                'Price'         => '4.21'
            ],
            [
                'Name'          => 'TestItem',
                'Description'   => 'This Item is a Test Item',
                'Price'         => '0.00'
            ]
        ]);
    }
}
