<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adminstrator',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin')
        ]);
    }
}
