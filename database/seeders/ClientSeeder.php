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
        // Client::factory(30)->create();

        $client = [
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
                'first_name' => ' M Joy',
                'middle_name' => 'Kim',
                'address' => ' Seoul, South Korea',
                'birth_date' => '2001-09-18',
                'phone_number' => '09123456782',
                'email' => 'maryjoylauros68@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Smith',
                'first_name' => 'Bree',
                'middle_name' => 'Test',
                'phone_number' => '09738473647',
                'address' => 'Tokyo, Japan',
                'birth_date' => '1996-12-18',
                'email' => 'breesmith279@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Lauros',
                'first_name' => 'Joy',
                'middle_name' => 'Manoban',
                'phone_number' => '09738493872',
                'address' => 'Cebu City',
                'birth_date' => '2001-09-27',
                'email' => 'joylauros5@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Smith',
                'first_name' => 'Ley',
                'middle_name' => 'Hakdog',
                'phone_number' => '09028364721',
                'address' => 'Pooc, Tubigon, Bohol.',
                'birth_date' => '2001-12-18',
                'email' => 'leysmith793@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Caminos',
                'first_name' => 'Apple Jean',
                'middle_name' => 'Andoy',
                'phone_number' => '0977455645',
                'address' => 'Calape, Bohol.',
                'birth_date' => '1995-08-04',
                'email' => 'applegwaps23@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Dups',
                'first_name' => 'Kristine',
                'middle_name' => 'Marie',
                'phone_number' => '0993024721',
                'address' => 'Ilijan, Tubigon, Bohol.',
                'birth_date' => '1990-11-02',
                'email' => 'dupakristin96@gmail.com',
                'initial_deposit' => 10000,
            ],
            [
                'last_name' => 'Aparicio',
                'first_name' => 'Denice',
                'middle_name' => 'Mae',
                'phone_number' => '09123456789',
                'address' => 'Inabanga, Bohol',
                'birth_date' => '1989-10-07',
                'email' => 'aparicio.enice1402@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Villarmia',
                'first_name' => 'Acejoy',
                'middle_name' => 'Amew',
                'phone_number' => '0992786378',
                'address' => 'India',
                'birth_date' => '1970-04-04',
                'email' => 'acejoygwapo123@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Mejias',
                'first_name' => 'Francis Micheal',
                'middle_name' => 'Bobet',
                'phone_number' => '09993748379',
                'address' => 'Calape, Bohol.',
                'birth_date' => '1900-07-17',
                'email' => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}