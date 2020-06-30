<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('students')->insert([
       		'first_name'=>Str::random(10),
       		'last_name'=>Str::random(10),
       		'class'=>Str::random(5),
       		'registration_number'=>Str::random(7),
       		'mobile_number'=>'08111990099',
       		'parent_name'=>Str::random(5)." " .Str::random(5),
       		'parent_id'=>1,
       		'email'=>Str::random(8).'@gmail.com',
       		'password'=>Hash::make('password')
       	]);
    }
}
