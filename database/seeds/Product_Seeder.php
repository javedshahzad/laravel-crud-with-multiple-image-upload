<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
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
        	'name'=>'abc22',
        	'price'=>'122222',
        	'category'=>'Person',
        	'description'=>'Testttt',
        	'gallery'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg'
        ],
        [
        	'name'=>'abc33',
        	'price'=>'122222',
        	'category'=>'Person',
        	'description'=>'Testttt',
        	'gallery'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg'
        ],
        [
        	'name'=>'abc44',
        	'price'=>'122222',
        	'category'=>'Person',
        	'description'=>'Testttt',
        	'gallery'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg'
        ],
        [
        	'name'=>'abc55',
        	'price'=>'122222',
        	'category'=>'Person',
        	'description'=>'Testttt',
        	'gallery'=>'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png'
        ]
        ]);
    }
}
