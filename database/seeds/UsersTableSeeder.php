<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
        	[
            'username' => 'admin1',
            'password' => bcrypt('123456789'),
            'fullname'=>'nguyen van 1',
            'email' => 'admin1@gmail.com',
            'address'=>'tan binh',
            'phone'=> 123456789,
            'lever'=> 1,
            'created_at'=>new DateTime(),
        	],
        	[
            'username' => 'admin2',
            'password' => bcrypt('12345789'),
            'fullname'=>'nguyen van 2',
            'email' => 'admin2@gmail.com',
            'address'=>'phu nhuan',
            'phone'=> 987456321,
            'lever'=> 1,
            'created_at'=>new DateTime(),
        	],
        	[
            'username' => 'admin3',
            'password' => bcrypt('123456852'),
            'fullname'=>'nguyen van 3',
            'email' => 'admin3@gmail.com',
            'address'=>'tan phu',
            'phone'=> 147852369,
            'lever'=> 1,
            'created_at'=>new DateTime(),
        	]
        ]
    );
    }
}
