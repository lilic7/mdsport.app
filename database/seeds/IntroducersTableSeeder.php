<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Introducer;
class IntroducersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Introducer::create([
            'name' => 'Mihai Burciu',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Introducer::create([
            'name' => 'Cristina Cojocaru',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Introducer::create([
            'name' => 'Cristina Melnic',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Introducer::create([
            'name' => 'Ion Jalbă',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Introducer::create([
            'name' => 'Alina Poloboc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Introducer::create([
            'name' => 'Andrei Cojocaru',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Introducer::create([
            'name' => 'inga dobraș',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
