<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemRoastTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_roast_types')->insert([

            'title' => 'Light',
            'detail' => 'Light',
            'icon' => '/images/icon/Light.jpg',
        ]);
        DB::table('item_roast_types')->insert([

            'title' => 'Medium',
            'detail' => 'Medium',
            'icon' => '/images/icon/Medium.jpg',
        ]);
        DB::table('item_roast_types')->insert([

            'title' => 'Dark',
            'detail' => 'Dark',
            'icon' => '/images/icon/Dark.jpg',
        ]);
    }
}
