<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndextextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('indexs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title_uk');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('heading_uk');
            $table->string('heading_ru');
            $table->string('heading_en');
            $table->text('text_uk');
            $table->text('text_ru');
            $table->text('text_en');
            $table->string('background_title_uk');
            $table->string('background_title_ru');
            $table->string('background_title_en');
            $table->string('background_text_uk');
            $table->string('background_text_ru');
            $table->string('background_text_en');
            $table->integer('menu_id');
            $table->string('photo');
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
        Schema::drop('indexs');
    }
}
