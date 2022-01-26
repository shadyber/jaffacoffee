<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Item;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(AddressSeeder::class);
        $this->call(ItemOrigionSeeder::class);
        $this->call(ItemSizeSeeder::class);
        $this->call(ItemRoastTypeSeeder::class);

       Item::factory(10)->create();
        BlogCategory::factory(10)->create();
        Blog::factory(10)->create();

    }
}
