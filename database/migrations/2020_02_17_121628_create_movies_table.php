<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
//id, title, žanr (genre), ime režisera (director), godinu kada je snimljen i storyline (zaplet)
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('genre');
            $table->string('director');
            $table->integer('year');
            $table->string('storyline');
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
        Schema::dropIfExists('movies');
    }
}
