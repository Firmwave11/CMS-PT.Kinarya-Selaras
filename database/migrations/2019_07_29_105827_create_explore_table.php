<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExploreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explore', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('link');
            $table->text('keterangan');
            $table->timestamps();
        });          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('explore');
    }
}
