<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name' => 'rom',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Language::create([
            'name' => 'rus',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
