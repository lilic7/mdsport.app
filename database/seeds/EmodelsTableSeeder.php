<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Emodel;
use App\Category;
use App\Production;
use App\Language;
use App\Introducer;

class EmodelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $talkShow = Category::where('name', '=', 'talk-show')->first();
        $info = Category::where('name', '=', 'informativ')->first();
        $divertisment = Category::where('name', '=', 'divertisment')->first();

        $production = Production::where('name', '=', 'autohton')->first();

        $rom = Language::where('name', '=', 'rom')->first();
        $rus = Language::where('name', '=', 'rus')->first();

        $burciu = Introducer::where('name', "=", "Mihai Burciu")->first();
        $jalba = Introducer::where('name', "=", "Ion Jalbă")->first();
        $alina = Introducer::where('name', "=", "Alina Poloboc")->first();
        $cojocaru = Introducer::where('name', "=", "Cristina Cojocaru")->first();


        $ecou = Emodel::create([
            'name' => 'Ecoul Sportului',
            'category_id' => $talkShow->id,
            'production_id' => $production->id,
            'language_id' => $rom->id,
            'default_duration' => 3600,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $ecou->introducer()->attach($burciu->id);
        $stiri = Emodel::create([
            'name' => 'Știri',
            'category_id' => $info->id,
            'production_id' => $production->id,
            'language_id' => $rom->id,
            'default_duration' => 1200,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $stiri->introducer()->attach($burciu->id);
        $stiri->introducer()->attach($cojocaru->id);
        $ds = Emodel::create([
            'name' => 'Dimineața sportivă',
            'category_id' => $divertisment->id,
            'production_id' => $production->id,
            'language_id' => $rom->id,
            'default_duration' => 7020,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        $ds->introducer()->attach($jalba->id);
        $ds->introducer()->attach($alina->id);
        Emodel::create([
            'name' => 'Retrospectiva rus',
            'category_id' => $info->id,
            'production_id' => $production->id,
            'language_id' => $rus->id,
            'default_duration' => 2400,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Emodel::create([
            'name' => 'Retrospectiva rom',
            'category_id' => $info->id,
            'production_id' => $production->id,
            'language_id' => $rom->id,
            'default_duration' => 3000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
