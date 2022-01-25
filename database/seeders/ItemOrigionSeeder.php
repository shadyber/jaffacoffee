<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemOrigionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_origions')->insert([

            'title' => 'Canada',
            'detail' => 'Canada',
            'icon' => '/images/icon/origion1.jpg',
        ]);
        DB::table('item_origions')->insert([

            'title' => 'Ethiopia',
            'detail' => 'Coffee Arabica',
            'icon' => '/images/icon/origion2.jpg',
        ]);
        DB::table('item_origions')->insert([

            'title' => 'China',
            'detail' => 'Coffee China',
            'icon' => '/images/icon/origion3.jpg',
        ]);
    }
}
