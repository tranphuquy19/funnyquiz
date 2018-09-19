<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tutorials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tag');
            $table->string('description');
            $table->mediumText('title');
            $table->string('image');
            $table->json('list_comment')->nullable();
            $table->dateTime('date_create');
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
        Schema::dropIfExists('tutorials');
    }
}
