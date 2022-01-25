<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('addresses')->insert([
            'tel' => '',
            'tel2' =>'+1 780 604 4778',
            'email' => 'admin@jafacoffee.com',
            'email2' =>'info@jafacoffee.com',
            'address1' => '13131 35 St NW, Edmonton, AB T5A 5C6,  ',
            'address2' => 'Canada',
        ]);
    }
}
