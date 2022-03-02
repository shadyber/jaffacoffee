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

            'title' => 'Ethiopia',
            'detail' => 'Ethiopia',
            'icon' => '/images/icon/origion1.jpg',
        ]);
        DB::table('item_origions')->insert([

            'title' => 'Guatemala',
            'detail' => 'Guatemala',
            'icon' => '/images/icon/origion2.jpg',
        ]);
        DB::table('item_origions')->insert([

            'title' => 'mexico',
            'detail' => 'mexico',
            'icon' => '/images/icon/origion3.jpg',
        ]);

        DB::table('item_origions')->insert([

            'title' => 'Colombia',
            'detail' => 'Colombia',
            'icon' => '/images/icon/origion3.jpg',
        ]);
    }
}
