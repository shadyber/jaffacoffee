<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('item_sizes')->insert([

            'title' => 'Small',
            'detail' => '340GG',
            'icon' => '/images/icon/340G.jpg',
        ]);
        DB::table('item_sizes')->insert([

            'title' => 'Big',
            'detail' => 'Big Size 500G',
            'icon' => '/images/icon/500g.jpg',
        ]);

    }
}
