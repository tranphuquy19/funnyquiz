<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreignkey extends Migration
{
    /**
     * Run the migrations.
     *      
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_tag')->references('id')->on('tags');
            $table->foreign('author')->references('id')->on('users');
        });

        Schema::table('tutorials', function (Blueprint $table) {
            $table->foreign('id_tag')->references('id')->on('tags');
        });

        Schema::table('downloads', function (Blueprint $table) {
            $table->foreign('id_tag')->references('id')->on('tags');
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
