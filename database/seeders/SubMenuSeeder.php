<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submenuses')->insert([
            [
                'name' => 'BRUNCH',
                'url' => '-',
                'file_name' => '-',
                'order' => 1
            ],
            [
                'name' => 'LUNCH',
                'url' => '-',
                'file_name' => '-',
                'order' => 2
            ],
            [
                'name' => 'DINNER',
                'url' => '-',
                'file_name' => '-',
                'order' => 3
            ],
            [
                'name' => 'SPEAKEASY',
                'url' => '-',
                'file_name' => '-',
                'order' => 4
            ],
            [
                'name' => 'VEGETARIAN',
                'url' => '-',
                'file_name' => '-',
                'order' => 5
            ],
            [
                'name' => 'VEGAN',
                'url' => '-',
                'file_name' => '-',
                'order' => 6
            ],
            [
                'name' => 'DRINGS',
                'url' => '-',
                'file_name' => '-',
                'order' => 7
            ],
        ]);
    }
}
