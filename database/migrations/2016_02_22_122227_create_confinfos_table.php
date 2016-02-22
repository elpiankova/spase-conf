<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('place');
            $table->string('text_uk');
            $table->string('text_ru');
            $table->string('text_en');
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
        Schema::drop('confinfos');
    }
}
