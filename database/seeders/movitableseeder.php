<?php

namespace Database\Seeders;

use App\Models\movitable;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class movitableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          for($i=0; $i<15; $i++){
            $movitable = new movitable;
            $movitable->img = fake()->image('public/movimages',400,480,'Movi',null,true,'Faker');
            $movitable->title =fake()->name;
            $movitable->publicationdate=fake()->date();
            $movitable->runtime=fake()->randomFloat(1,30, 60);
            $movitable->description=fake()->paragraph(2);
            $movitable->save();
          }

    }
}
