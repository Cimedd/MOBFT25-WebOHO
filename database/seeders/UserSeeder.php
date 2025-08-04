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
                'name'=>'Cakrawala 1',
                'username'=>'cakrawala1',
                'email'=>'cakrawala1@gmail.com',
                'password'=>Hash::make('1cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 2',
                'username'=>'cakrawala2',
                'email'=>'cakrawala2@gmail.com',
                'password'=>Hash::make('2cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 3',
                'username'=>'cakrawala3',
                'email'=>'cakrawala3@gmail.com',
                'password'=>Hash::make('3cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 4',
                'username'=>'cakrawala4',
                'email'=>'cakrawala4@gmail.com',
                'password'=>Hash::make('4cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 5',
                'username'=>'cakrawala5',
                'email'=>'cakrawala5@gmail.com',
                'password'=>Hash::make('5cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 6',
                'username'=>'cakrawala6',
                'email'=>'cakrawala6@gmail.com',
                'password'=>Hash::make('6cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 7',
                'username'=>'cakrawala7',
                'email'=>'cakrawala7@gmail.com',
                'password'=>Hash::make('7cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 8',
                'username'=>'cakrawala8',
                'email'=>'cakrawala8@gmail.com',
                'password'=>Hash::make('8cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 9',
                'username'=>'cakrawala9',
                'email'=>'cakrawala9@gmail.com',
                'password'=>Hash::make('9cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 10',
                'username'=>'cakrawala10',
                'email'=>'cakrawala10@gmail.com',
                'password'=>Hash::make('10cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 11',
                'username'=>'cakrawala11',
                'email'=>'cakrawala11@gmail.com',
                'password'=>Hash::make('11cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 12',
                'username'=>'cakrawala12',
                'email'=>'cakrawala12@gmail.com',
                'password'=>Hash::make('12cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 13',
                'username'=>'cakrawala13',
                'email'=>'cakrawala13@gmail.com',
                'password'=>Hash::make('13cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 14',
                'username'=>'cakrawala14',
                'email'=>'cakrawala14@gmail.com',
                'password'=>Hash::make('14cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 15',
                'username'=>'cakrawala15',
                'email'=>'cakrawala15@gmail.com',
                'password'=>Hash::make('15cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 16',
                'username'=>'cakrawala16',
                'email'=>'cakrawala16@gmail.com',
                'password'=>Hash::make('16cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 17',
                'username'=>'cakrawala17',
                'email'=>'cakrawala17@gmail.com',
                'password'=>Hash::make('17cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 18',
                'username'=>'cakrawala18',
                'email'=>'cakrawala18@gmail.com',
                'password'=>Hash::make('18cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 19',
                'username'=>'cakrawala19',
                'email'=>'cakrawala19@gmail.com',
                'password'=>Hash::make('19cakrawalaMOBFT25!'),
                'role'=>'team'
            ],
            [
                'name'=>'Cakrawala 20',
                'username'=>'cakrawala20',
                'email'=>'cakrawala20@gmail.com',
                'password'=>Hash::make('20cakrawalaMOBFT25!'),
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
