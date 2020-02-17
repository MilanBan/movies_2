<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            //id, movie_id, content, created_at
            $table->bigIncrements('id');
            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id')
                ->references('id')
                ->on('movies')
                ->onDelete('cascade');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
