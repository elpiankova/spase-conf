<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfcommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confcommittees', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('place');
            $table->string('title_uk');
            $table->string('title_en');
            $table->string('title_ru');
            $table->text('text_uk');
            $table->text('text_en');
            $table->text('text_ru');
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
        Schema::drop('confcommittees');
    }
}
