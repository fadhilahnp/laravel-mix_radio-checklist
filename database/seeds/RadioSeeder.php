<?php

use Illuminate\Database\Seeder;
use App\Radio;

class RadioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Radio::create([
            'name' => 'VHF/DSC #1'
        ]);

        Radio::create([
            'name' => 'VHF/DSC #2'
        ]);

        Radio::create([
            'name' => 'VHF/DSC #3'
        ]);

        Radio::create([
            'name' => 'SSB (MF/HF DSC)'
        ]);

        Radio::create([
            'name' => '88B (MF/HF DSC)'
        ]);

        Radio::create([
            'name' => 'NBDP'
        ]);

        Radio::create([
            'name' => 'SART #1/ Bolt Exp.'
        ]);

        Radio::create([
            'name' => 'SART #2/ Bolt Exp.'
        ]);

        Radio::create([
            'name' => 'EPIRB 406 MHz/ Bolt Exp.'
        ]);

        Radio::create([
            'name' => 'ID Code for EPIRB'
        ]);
    }
}
