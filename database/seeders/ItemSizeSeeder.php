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

            'title' => 'Big',
            'detail' => 'Big Size 1KG',
            'icon' => '/images/icon/size1.jpg',
        ]);
        DB::table('item_sizes')->insert([

            'title' => 'Medium',
            'detail' => 'Big Size 500G',
            'icon' => '/images/icon/size2.jpg',
        ]);
        DB::table('item_sizes')->insert([

            'title' => 'Small',
            'detail' => 'Big Size 300G',
            'icon' => '/images/icon/size3.jpg',
        ]);
        DB::table('item_sizes')->insert([

            'title' => 'Small',
            'detail' => 'Big Size 200G',
            'icon' => '/images/icon/size4.jpg',
        ]);
    }
}
