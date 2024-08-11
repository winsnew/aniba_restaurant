<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_story', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2');
            $table->string('top_desc1');
            $table->string('top_desc2');
            $table->text('desc');
            $table->timestamps();
        });
        // Schema::create('our_story_content', function (Blueprint $table) {
        //     $table->id();
        //     $table->tinyInteger('content');
        //     $table->text('description');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_story');
        Schema::dropIfExists('our_story_content');
    }
}
