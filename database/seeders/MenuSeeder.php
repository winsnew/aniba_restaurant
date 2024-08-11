<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'Home'
            ],
            [
                'name' => 'Our Story'
            ],
            [
                'name' => 'Our Chefs'
            ],
            [
                'name' => 'Our Team'
            ],
            [
                'name' => 'Our Bar'
            ],
            [
                'name' => 'Opening Hours'
            ],
            [
                'name' => 'Private EVents'
            ],
            [
                'name' => 'Private Room'
            ],
            [
                'name' => 'Contact Us'
            ],
            [
                'name' => 'Press'
            ],
            [
                'name' => 'Reservation'
            ],
            [
                'name' => 'Gallery'
            ]

        ]);
    }
}
