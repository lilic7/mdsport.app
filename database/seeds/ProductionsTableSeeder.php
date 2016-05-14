<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Production;

class ProductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Production::create([
            'name' => 'autohton',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
