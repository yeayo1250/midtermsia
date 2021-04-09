<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->string('description'); 
            $table->bigInteger('artist_id')->unsigned(); 
            $table->bigInteger('track_id')->unsigned();        
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete("CASCADE");
            $table->foreign('track_id')->references('id')->on('tracks')->onDelete("CASCADE");
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
        Schema::dropIfExists('albums');
    }
}
