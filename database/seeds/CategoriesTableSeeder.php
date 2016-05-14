<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'informativ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'educațional',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'talk-show',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'divertisment',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $eveniment = Category::create([
            'name' => 'eveniment',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'documentar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $bloc = Category::create([
            'name' => 'blocuri',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'promo',
            'parent_id' => $bloc->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'publicitate',
            'parent_id' => $bloc->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'bile',
            'parent_id' => $bloc->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'social',
            'parent_id' => $bloc->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'fotbal',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'minifotbal',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'bashet',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'tenis',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'hokei',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'futsal',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'handbal',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'gala',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'Baku 2015',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Category::create([
            'name' => 'lupte',
            'parent_id' => $eveniment->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
