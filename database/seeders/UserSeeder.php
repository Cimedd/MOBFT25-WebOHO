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
                'name'=>'Semesta 1',
                'username'=>'semesta1',
                'email'=>'semesta1@gmail.com',
                'password'=>Hash::make('1semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 2',
                'username'=>'semesta2',
                'email'=>'semesta2@gmail.com',
                'password'=>Hash::make('2semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 3',
                'username'=>'semesta3',
                'email'=>'semesta3@gmail.com',
                'password'=>Hash::make('3semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 4',
                'username'=>'semesta4',
                'email'=>'semesta4@gmail.com',
                'password'=>Hash::make('4semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 5',
                'username'=>'semesta5',
                'email'=>'semesta5@gmail.com',
                'password'=>Hash::make('5semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 6',
                'username'=>'semesta6',
                'email'=>'semesta6@gmail.com',
                'password'=>Hash::make('6semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 7',
                'username'=>'semesta7',
                'email'=>'semesta7@gmail.com',
                'password'=>Hash::make('7semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 8',
                'username'=>'semesta8',
                'email'=>'semesta8@gmail.com',
                'password'=>Hash::make('8semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 9',
                'username'=>'semesta9',
                'email'=>'semesta9@gmail.com',
                'password'=>Hash::make('9semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 10',
                'username'=>'semesta10',
                'email'=>'semesta10@gmail.com',
                'password'=>Hash::make('10semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 11',
                'username'=>'semesta11',
                'email'=>'semesta11@gmail.com',
                'password'=>Hash::make('11semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 12',
                'username'=>'semesta12',
                'email'=>'semesta12@gmail.com',
                'password'=>Hash::make('12semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 13',
                'username'=>'semesta13',
                'email'=>'semesta13@gmail.com',
                'password'=>Hash::make('13semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 14',
                'username'=>'semesta14',
                'email'=>'semesta14@gmail.com',
                'password'=>Hash::make('14semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 15',
                'username'=>'semesta15',
                'email'=>'semesta15@gmail.com',
                'password'=>Hash::make('15semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 16',
                'username'=>'semesta16',
                'email'=>'semesta16@gmail.com',
                'password'=>Hash::make('16semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 17',
                'username'=>'semesta17',
                'email'=>'semesta17@gmail.com',
                'password'=>Hash::make('17semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 18',
                'username'=>'semesta18',
                'email'=>'semesta18@gmail.com',
                'password'=>Hash::make('18semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 19',
                'username'=>'semesta19',
                'email'=>'semesta19@gmail.com',
                'password'=>Hash::make('19semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Semesta 20',
                'username'=>'semesta20',
                'email'=>'semesta20@gmail.com',
                'password'=>Hash::make('20semestaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Koor AD',
                'username'=>'koorad',
                'email'=>'koorad@gmail.com',
                'password'=>Hash::make('koorADMOBFT2025'),
                'role'=>'panitia'
            ],
            [
                'name'=>'Wakoor AD',
                'username'=>'wakoorad',
                'email'=>'bagasAD@gmail.com',
                'password'=>Hash::make('wakoorADMOBFT2025'),
                'role'=>'panitia'
            ],
            [
                'name'=>'Anggota AD',
                'username'=>'anggotaad',
                'email'=>'anggotaAD@gmail.com',
                'password'=>Hash::make('anggotaADMOBFT2025'),
                'role'=>'panitia'
            ],
            [
                'name'=>'ED',
                'username'=>'ed',
                'email'=>'anggotaED@gmail.com',
                'password'=>Hash::make('edMOBFT2025'),
                'role'=>'panitia'
            ]
        ]);
    }
}
