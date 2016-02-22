<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfdescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confdescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_uk');
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('text_uk');
            $table->text('text_ru');
            $table->text('text_en');
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
        Schema::drop('confdescriptions');
    }
}
