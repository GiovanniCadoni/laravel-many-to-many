<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['Laravel', 'Bootstrap', 'Javascript', 'Php', 'CSS'];
        foreach($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->nome = $technology;
            $newTechnology->slug = Str::slug($technology);
            $newTechnology->esa_colore= $faker->hexColor();
            $newTechnology->save();
        }
    }
}
