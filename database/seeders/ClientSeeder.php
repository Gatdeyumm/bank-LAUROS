<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(30)->create();
        $cl = [
            [
                'last_name' => 'Lauros',
                'first_name' => 'Mary',
                'middle_name' => 'Secret',
                'address' => 'Pondol,Loon,Bohol',
                'birth_date' => '2001-09-12',
                'phone_number' => '09093232492',
                'email' => 'kimsecret627@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Lauros',
                'first_name' => 'Joy',
                'middle_name' => 'Kim',
                'address' => ' Seoul, South Korea',
                'birth_date' => '2001-09-18',
                'phone_number' => '09123456782',
                'email' => 'kimsecret627@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}