<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfabstractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confabstracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_uk');
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('text_uk');
            $table->string('text_en');
            $table->string('text_ru');
            $table->string('photo');
            $table->string('file');
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
        Schema::drop('confabstracts');
    }
}
