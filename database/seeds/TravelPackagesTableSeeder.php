<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\TravelPackage;

class TravelPackagesTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for ($i=0; $i < 20; $i++) {
            $newTravel_Package = new TravelPackage();
            $newTravel_Package->destination = $faker->country;
            $newTravel_Package->departure = $faker->date($format = 'Y-m-d', $max = 'now');
            $newTravel_Package->return = $faker->date($format = 'Y-m-d', $max = 'now');
            $newTravel_Package->airlineCompany = $faker->company;
            $newTravel_Package->lunchPackage = $faker->boolean;
            $newTravel_Package->accommodation = $faker->boolean;
            $newTravel_Package->receptionOfficer = $faker->boolean;
            $newTravel_Package->transferService = $faker->boolean;
            $newTravel_Package->descriptionTravel = $faker->text($maxNbChars = 200);
            $newTravel_Package->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 500.00, $max = 10000.00);
            $newTravel_Package->save();
        }
    }
}
