<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(IndexSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ConfinfoSeeder::class);
        $this->call(ConfabstractSeeder::class);
        $this->call(ConfdescriptionSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(SpaceorganizationTableSeeder::class);
        $this->call(SpaceorganizationTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }
}
