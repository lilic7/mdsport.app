<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Format;

class FormatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Format::create([
            'name' => 'direct',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Format::create([
            'name' => 'reluare',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Format::create([
            'name' => 'premieră',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
