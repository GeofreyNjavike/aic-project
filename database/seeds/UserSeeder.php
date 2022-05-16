<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Erick',
            'lname' => 'Chibasa',
            'email' => 'chibasaerick@gmail.com',
            'clearance_level' => 10,
            'ushuhuda' => 'Its the best place for growth as well as training for better health and entertainment. I believe if everyone has a chance to bring his/her kid here !',
            'password' => Hash::make('12345678'),
            'phone' => '0712828561',
        ]);
    }
}
