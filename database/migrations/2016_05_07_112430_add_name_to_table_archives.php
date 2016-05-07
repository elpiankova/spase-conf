<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class AddNameToTableArchives extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public
        function up()
        {
            Schema::table('archives', function (Blueprint $table) {
                $table->string('title_uk');
                $table->string('title_en');
                $table->string('title_ru');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public
        function down()
        {
            Schema::table('archives', function (Blueprint $table) {
                $table->dropColumn('title_uk');
                $table->dropColumn('title_en');
                $table->dropColumn('title_ru');
            });
        }
    }
