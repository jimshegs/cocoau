<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stewards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('office');
            $table->string('department');
            $table->string('page_image');
            $table->string('profile_photo');
            $table->string('bible_passage');
            $table->string('bible_character');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
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
        Schema::drop('stewards');
    }
}
