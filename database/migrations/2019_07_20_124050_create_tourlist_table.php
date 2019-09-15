<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourlist', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_tour');
            $table->string('harga');
            $table->string('waktutour');
            $table->text('keterangan');
            $table->text('gambar');
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
        Schema::dropIfExists('tourlist');
    }
}
