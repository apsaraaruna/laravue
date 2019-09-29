<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 250);
            $table->mediumInteger('artist');
            $table->mediumInteger('album');
            $table->mediumInteger('genre');
            $table->string('duration', 8);
            $table->string('path', 250);
            $table->mediumInteger('albumOrder');
            $table->mediumInteger('plays');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('songs');
    }
}
