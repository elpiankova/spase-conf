<?php

use Illuminate\Database\Seeder;

class ConfabstractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('confabstracts')->insert([
            'title_uk'=>'Вимоги до оформлення тез',
            'text_uk' =>'Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.',
        ]);
    }
}
