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

            'title' => 'Roasted',
            'detail' => 'Roasted',
            'icon' => '/images/icon/roasted.jpg',
        ]);
        DB::table('item_roast_types')->insert([

            'title' => 'Fresh',
            'detail' => 'Fresh Bean',
            'icon' => '/images/icon/fresh.jpg',
        ]);
    }
}
