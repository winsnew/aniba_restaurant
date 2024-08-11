<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookNowLinkInOperationHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('operation_hours', function (Blueprint $table) {
            $table->string('book_now_link')->after('operation_footer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('operation_hours', function (Blueprint $table) {
            $table->dropColumn('book_now_link');
        });
    }
}
