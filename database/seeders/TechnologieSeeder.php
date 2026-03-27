<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Technologie;
use Illuminate\Support\Str;

class TechnologieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 7; $i++) {
            $newTechnologie = new Technologie();

            $newTechnologie->name = $faker->word();
            $newTechnologie->slug = Str::slug($newTechnologie->name, '-');

            $newTechnologie->save();
        }
    }
}
