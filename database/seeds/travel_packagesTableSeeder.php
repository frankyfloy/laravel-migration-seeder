<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel_Package;

class travel_packagesTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for ($i=0; $i < 20; $i++) {
            $newTravel_Package = new Travel_Package();
            $newTravel_Package->destination = $faker->country;
            $newTtravel_Package->departure = $faker->dateTime($max = 'now', $timezone = null);
            $newTravel_Package->return = $faker->dateTime($max = 'now', $timezone = null);
            $newTravel_Package->airlineCompany = $faker->company;
            $newTravel_Package->lunchPackage = $faker->boolean;
            $newTravel_Package->accommodation = $faker->boolean;
            $newTravel_Package->receptionOfficer = $faker->boolean;
            $newTravel_Package->transferService = $faker->boolean;
            $newTravel_Package->descriptionTravel = $faker->text($maxNbChars = 200);
            $newTravel_Package->price = $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL);
            $newTravel_Package->save();
        }
    }
}
