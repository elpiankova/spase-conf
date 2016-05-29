<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserInfoToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('middle_name')->nullable();
            $table->date('birth');
            $table->integer('organization_id');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->text('phone');
            $table->text('photo');
            $table->integer('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('gender');
            $table->dropColumn('middle_name');
            $table->dropColumn('birth');
            $table->dropColumn('organization_id');
            $table->dropColumn('country_id');
            $table->dropColumn('phone');
            $table->dropColumn('photo');
            $table->dropColumn('gender');
        });
    }
}
