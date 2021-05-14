<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1111'),
                'number'=>'9895157065',
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('1111'),
                'number'=>'9074727570',
                'role'=>'user',
                'status'=>'active'
            )
            );

        DB::table('users')->insert($data);
    }
}
