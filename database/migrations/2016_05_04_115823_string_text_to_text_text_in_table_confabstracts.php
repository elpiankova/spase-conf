<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StringTextToTextTextInTableConfabstracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('confabstracts', function (Blueprint $table) {
            $table->text('text_uk')->change();
            $table->text('text_ru')->change();
            $table->text('text_en')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('confabstracts', function (Blueprint $table) {
            $table->string('text_uk')->change();
            $table->string('text_ru')->change();
            $table->string('text_en')->change();
        });
    }
}
