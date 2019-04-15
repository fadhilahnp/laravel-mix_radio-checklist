<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Ship;

class ShipSeeder extends Seeder
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
            Ship::create([
                'admin_id' => '1',
                'ref_no' => $key + 1,
                'ship_name' => $faker->firstName,
                'call_sign' => $faker->company,
                'port_register' => $faker->company,
                'gross_tonnage' => $faker->randomDigitNotNull,
                'imo_number' => $faker->numerify('IMO###'),
                'mmsi_number' => $faker->numerify('MSI###'),
                'no_reg' => $faker->numerify('REG#####'),
                'radio_area' => $faker->state,
                'no_sikr' => $faker->numerify('SIKR###'),
                'berlaku_sampai' => $faker->date($format = 'Y-m-d', $min = 'now'),
                'cart_oru1' => $faker->numerify('ORU##'),
                'atas_nama1' => $faker->name,
                'cart_oru2' => $faker->numerify('ORU##'),
                'atas_nama2' => $faker->name,
                'thn_letak_lunas' => $faker->year($min = 'now'),
                'tempat_pemeriksaan' => $faker->city,
                'tanggal_pemeriksaan' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'daerah_pelayaran' => $faker->state,
            ]);
        }
    }
}
