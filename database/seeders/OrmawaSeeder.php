<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrmawaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ormawas')->insert([
            [
                'name'=>'DPM FT',
                'code'=>'dpmft1',
                'img_logo'=>'dpm_ft.png'
            ],
            [
                'name'=>'KMM PPM',
                'code'=>'kmmppm2',
                'img_logo'=>'kmm_ppm.png'
            ],
            [
                'name'=>'KMM RK', 
                'code'=> 'kmmrk3',
                'img_logo'=>'kmm_rk.png'
            ], 
            [
                'name'=>'KMM SPORTS',
                'code'=>'kmmsports4',
                'img_logo'=>'kmm_sports.png'
            ],
            [
                'name'=>'KSM FOTMED',
                'code'=>'ksmfotmed5',
                'img_logo'=>'ksm_fotmed.png'
            ],
            [
                'name'=>'KSM IF',
                'code'=>'ksmif6',
                'img_logo'=>'ksm_if.png'
            ],
            [
                'name'=>'KSM TE',
                'code'=>'ksmte7',
                'img_logo'=>'ksm_te.png'
            ],
            [
                'name'=>'KSM TI',
                'code'=>'ksmti8',
                'img_logo'=>'ksm_ti.png'
            ],
            [
                'name'=>'KSM TK',
                'code'=>'ksmtk9',
                'img_logo'=>'ksm_tk.png'
            ],
            [
                'name'=>'KSM TMM',
                'code'=>'ksmtmm10',
                'img_logo'=>'ksm_tmm.png'
            ],
            [
                'name'=>'BEM FT',
                'code'=>'bemft11',
                'img_logo'=>'bem_ft.png'
            ]
        ]);
    }
}
