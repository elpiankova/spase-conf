<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Database\Eloquent\Model;
    use \App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Country::create([
            'title_uk' => 'Україна',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Богарія',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Польща',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Китай',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Білорусія',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Казахстан',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Росія',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Румунія',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Франція',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Німечина',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Італія',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Іспанія',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'США',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);
        Country::create([
            'title_uk' => 'Англія',
            'created_at'   => new DateTime,
            'updated_at'   => new DateTime,
        ]);

    }
}
