<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Arcadia 1',
                'username'=>'arcadia1',
                'email'=>'acardia1@gmail.com',
                'password'=>Hash::make('1arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 2',
                'username'=>'arcadia2',
                'email'=>'acardia2@gmail.com',
                'password'=>Hash::make('2arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 3',
                'username'=>'arcadia3',
                'email'=>'acardia3@gmail.com',
                'password'=>Hash::make('3arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 4',
                'username'=>'arcadia4',
                'email'=>'acardia4@gmail.com',
                'password'=>Hash::make('4arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 5',
                'username'=>'arcadia5',
                'email'=>'acardia5@gmail.com',
                'password'=>Hash::make('5arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 6',
                'username'=>'arcadia6',
                'email'=>'acardia6@gmail.com',
                'password'=>Hash::make('6arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 7',
                'username'=>'arcadia7',
                'email'=>'acardia7@gmail.com',
                'password'=>Hash::make('7arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 8',
                'username'=>'arcadia8',
                'email'=>'acardia8@gmail.com',
                'password'=>Hash::make('8arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 9',
                'username'=>'arcadia9',
                'email'=>'acardia9@gmail.com',
                'password'=>Hash::make('9arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 10',
                'username'=>'arcadia10',
                'email'=>'acardia10@gmail.com',
                'password'=>Hash::make('10arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 11',
                'username'=>'arcadia11',
                'email'=>'acardia11@gmail.com',
                'password'=>Hash::make('11arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 12',
                'username'=>'arcadia12',
                'email'=>'acardia12@gmail.com',
                'password'=>Hash::make('12arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 13',
                'username'=>'arcadia13',
                'email'=>'acardia13@gmail.com',
                'password'=>Hash::make('13arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 14',
                'username'=>'arcadia14',
                'email'=>'acardia14@gmail.com',
                'password'=>Hash::make('14arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 15',
                'username'=>'arcadia15',
                'email'=>'acardia15@gmail.com',
                'password'=>Hash::make('15arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 16',
                'username'=>'arcadia16',
                'email'=>'acardia16@gmail.com',
                'password'=>Hash::make('16arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 17',
                'username'=>'arcadia17',
                'email'=>'acardia17@gmail.com',
                'password'=>Hash::make('17arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 18',
                'username'=>'arcadia18',
                'email'=>'acardia18@gmail.com',
                'password'=>Hash::make('18arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 19',
                'username'=>'arcadia19',
                'email'=>'acardia19@gmail.com',
                'password'=>Hash::make('19arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Arcadia 20',
                'username'=>'arcadia20',
                'email'=>'acardia20@gmail.com',
                'password'=>Hash::make('20arcadiaMOBFT24!'),
                'role'=>'team'
            ],
            [
                'name'=>'Koor AD',
                'username'=>'ditha',
                'email'=>'dithaAD@gmail.com',
                'password'=>Hash::make('dithaADMOBFT2024    '),
                'role'=>'panitia'
            ],
            [
                'name'=>'Wakoor AD',
                'username'=>'bagas',
                'email'=>'bagasAD@gmail.com',
                'password'=>Hash::make('bagasADMOBFT2024'),
                'role'=>'panitia'
            ],
            [
                'name'=>'Anggota AD',
                'username'=>'anggotaAD',
                'email'=>'anggotaAD@gmail.com',
                'password'=>Hash::make('anggotaADMOBFT2024'),
                'role'=>'panitia'
            ],
            [
                'name'=>'ED',
                'username'=>'ed',
                'email'=>'anggotaED@gmail.com',
                'password'=>Hash::make('edMOBFT2024'),
                'role'=>'panitia'
            ]
        ]);
    }
}
