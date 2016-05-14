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
        $this->call(FormatsTableSeeder::class);
        $this->call(IntroducersTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(ProductionsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(EmodelsTableSeeder::class);
        $this->call(EmodelProgramTableSeeder::class);
    }
}
