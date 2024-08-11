<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OurStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('our_story')->insert([
            'title' => "<h2><em>A VOYAGE ACROSS</em><br />
            SEAS &amp; CONTINENTS</h2>"
        ]);

        DB::table('our_story_content')->insert([
            [
                'content' => 1,
                'top_description' => "<h6>ANIBA in hebrew means</h6>

                <h2><b>&lsquo;<i>Here I come</i>&nbsp;&rsquo;</b></h2>",
                'description' => "<p>It is a reinvention of the best from around the world &mdash;<br />
                <br />
                A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey &mdash;<br />
                <br />
                A harmonious play of flavours between east and west.</p>"
            ],
            [
                'content' => 2,
                'top_description' => "<h6>ANIBA in hebrew means</h6>

                <h2><b>&lsquo;<i>Here I come</i>&nbsp;&rsquo;</b></h2>",
                'description' => "<p>It is a reinvention of the best from around the world &mdash;<br />
                <br />
                A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey &mdash;<br />
                <br />
                A harmonious play of flavours between east and west.</p>"
            ],
            [
                'content' => 3,
                'top_description' => "<h6>ANIBA in hebrew means</h6>

                <h2><b>&lsquo;<i>Here I come</i>&nbsp;&rsquo;</b></h2>",
                'description' => "<p>It is a reinvention of the best from around the world &mdash;<br />
                <br />
                A new interpretation of Middle Eastern Cuisine with European style by Chef Meir Adoni, inspired by stops in his culinary journey &mdash;<br />
                <br />
                A harmonious play of flavours between east and west.</p>"
            ]
        ]);
    }
}
