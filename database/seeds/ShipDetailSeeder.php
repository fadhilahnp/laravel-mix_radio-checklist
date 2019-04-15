<?php

use Illuminate\Database\Seeder;

use Faker\Factory;
use App\ShipDetail;

class ShipDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 50) as $key=>$value) {
            ShipDetail::create([
                'ref_no' => $faker->numberBetween($min = 1, $max = 50),
                'radio_id' => $faker->numberBetween($min = 1, $max = 10),
                'merk' => $faker->company,
                'type' => $faker->numerify('RF####MCB'),
                'serial_number' => $faker->swiftBicNumber,
                'approval' => $faker->jobTitle,
            ]);
        }
    }
}
