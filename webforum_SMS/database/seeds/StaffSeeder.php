<?php

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'identity_num' => Str::random(10),
            'role' => Str::random(10),
            'subject_taken' => Str::random(10),
            'mobile_number' => Str::random(10),
            'password' => Hash::make('password'),
        ]);
    }
}
