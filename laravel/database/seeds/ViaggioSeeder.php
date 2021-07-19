<?php

use Faker\Generator as Faker;
use App\Viaggio;
use Illuminate\Database\Seeder;

class ViaggioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $viaggi = config('viaggi.data');
        // foreach ($viaggi as $viaggio) {
        //     $h = new Viaggio();
        //     $h->place = $viaggio['place'];
        //     $h->description= $viaggio['description'];
        //     $h->price = $viaggio['price'];
        //     $h->period = $viaggio['period'];
        //     $h->poster = $viaggio['poster'];
        //     $h->save();
        // }

        for ($i=0; $i < 20; $i++) { 
            $viaggio = new Viaggio();
            $viaggio->place = $faker->word();
            $viaggio->description = $faker->sentence();
            $viaggio->price = $faker->numerify();
            $viaggio->period = $faker->dateTimeThisYear();
            $viaggio->poster = $faker->imageUrl(640, 480, 'Places', true, null, true);
            $viaggio->save();

        }


    }
}


