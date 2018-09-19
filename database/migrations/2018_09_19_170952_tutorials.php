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
            $table->mediumText('title');
            $table->string('image');
            $table->json('list_comments');
            $table->dateTime('create_at');
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
        //
    }
}
