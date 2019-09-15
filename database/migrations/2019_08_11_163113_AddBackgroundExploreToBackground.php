<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBackgroundExploreToBackground extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('background', function($table) {
            $table->string('background_explore')->after('background_akhir');
            $table->string('background_orang')->after('background_awal');
           
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('background', function($table) {
            $table->dropColumn('background_explore');
            $table->dropColumn('background_orang');
        });
    }
}
