<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $technologies=[
            'Php','Laravel','Html','Scss','Css','Vue','Bootstrap' 
        ];

        foreach ($technologies as $technology){
            $newTechnology = new Technology;
            $newTechnology->name= $technology;
            $newTechnology->slug= $faker->slug();
            $newTechnology->save();
        }
    }
}
