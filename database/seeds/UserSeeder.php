<?php

use Illuminate\Database\Seeder;
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
        $data = [
            [
                'lname' => 'Arcayos',
                'fname' => 'Alyssa Mae',
                'address' => 'Buacao, Clarin, Bohol',
                'phone' => '0912.456.7432',
                'email' => 'alyssaarcayos@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Melicado',
                'fname' => 'Jeffrey',
                'address' => 'Bunacan, Tubigon, Bohol',
                'phone' => '0912.675.3456',
                'email' => 'jeffmel@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Silagan',
                'fname' => 'Kate',
                'address' => 'Bosongon, Tubigon, Bohol',
                'phone' => '0946.786.8784',
                'email' => 'katya@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Deleon',
                'fname' => 'Jerly',
                'address' => 'Bosongon,Tubigon, Bohol',
                'phone' => '0948.765.3345',
                'email' => 'nenesilagan@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Silagan',
                'fname' => 'Joey',
                'address' => 'Buacao, Clarin, Bohol',
                'phone' => '0946.767.0987',
                'email' => 'joeysil@gmail.com',
                'password' => bcrypt('password123')
            ]
        ];
        DB::table('users')->insert($data);
    }
}
