<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\EmodelProgram;
use App\Emodel;

class EmodelProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ecou = Emodel::where('name', '=', 'Ecoul Sportului')->first();
        $retrospectiva_rus = Emodel::where('name', '=', 'Retrospectiva rus')->first();
        $retrospectiva_rom = Emodel::where('name', '=', 'Retrospectiva rom')->first();

        EmodelProgram::create([
            'emodel_id' => $ecou->id,
            'weekday' => Carbon::WEDNESDAY,
            'hour' => Carbon::createFromTime(20, 00),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        EmodelProgram::create([
            'emodel_id' => $ecou->id,
            'weekday' => Carbon::FRIDAY,
            'hour' => Carbon::createFromTime(20, 00),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        EmodelProgram::create([
            'emodel_id' => $retrospectiva_rom->id,
            'weekday' => Carbon::SUNDAY,
            'hour' => Carbon::createFromTime(21, 00),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        EmodelProgram::create([
            'emodel_id' => $retrospectiva_rus->id,
            'weekday' => Carbon::SATURDAY,
            'hour' => Carbon::createFromTime(21, 00),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
