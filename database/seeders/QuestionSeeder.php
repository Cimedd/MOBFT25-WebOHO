<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            /*DPM FT */
            [
                'question'=>'Terdapat 3 divisi di DPM Fakultas Teknik',
                'ormawa_id'=>1,
                'answer'=>0
            ],
            [
                'question'=>'Salah satu program kerja DPM Fakultas Teknik adalah Engineers Week & Sharing Days',
                'ormawa_id'=>1,
                'answer'=>1
            ],
            [
                'question'=>'Program Sharing Days bertujuan untuk bonding antar anggota DPM Fakultas Teknik',
                'ormawa_id'=>1,
                'answer'=>0
            ],
            [
                'question'=> 'DPM Fakultas Teknik menerapkan sistem Staf Magang',
                'ormawa_id'=>1,
                'answer'=>1
            ],
            [
                'question'=>'DPM Fakultas Teknik merupakan lembaga Eksekutif di Fakultas Teknik',
                'ormawa_id'=>1,
                'answer'=>0
            ],
            /*BEM FT*/
            [
                'question'=>'BPH BEM Fakultas Teknik terdiri dari 4 orang',
                'ormawa_id'=>11,
                'answer'=>0
            ],
            [
                'question'=>'Kepanjangan divisi AD adalah Audit Departement',
                'ormawa_id'=>11,
                'answer'=>0
            ],
            [
                'question'=>'BEM FT adalah organisasi eksekutif di Fakultas Teknik',
                'ormawa_id'=>11,
                'answer'=>1
            ],
            [
                'question'=>'OD bertugas untuk mengurus inventaris seluruh Fakultas Teknik',
                'ormawa_id'=>11,
                'answer'=>0
            ],
            [
                'question'=>'Instagram BEM FT adalah @bemftubaya',
                'ormawa_id'=>11,
                'answer'=>0
            ],
            /*KSM TI*/
            [
                'question'=>'Terdapat 5 divisi di KSM Teknik Industri',
                'ormawa_id'=>8,
                'answer'=>0
            ],
            [
                'question'=>'Ruangan KSM Teknik Industri berada di TF 01.08',
                'ormawa_id'=>8,
                'answer'=>1
            ],
            [
                'question'=>'Divisi Partner bertugas untuk membangun dan meningkatkan hubungan kekeluargaan dalam KSM Teknik Industri',
                'ormawa_id'=>8,
                'answer'=>0
            ],
            [
                'question'=> 'Memiliki misi untuk meningkatkan rasa kebersamaan dan kepedulian antar organisasi mahasiswa',
                'ormawa_id'=>8,
                'answer'=>0
            ],
            [
                'question'=>'Tagline KSM Teknik Industri adalah “Incredible”',
                'ormawa_id'=>8,
                'answer'=>1
            ],
            /*KSM TK*/
            [
                'question'=>'Arti Logo Gigi Roda melambangkan sebagai tempat untuk berproses untuk menghasilkan output terbaik',
                'ormawa_id'=>9,
                'answer'=>0
            ],
            [
                'question'=>'Pelatihan Komputasi merupakan program kerja divisi Research and Development Department',
                'ormawa_id'=>9,
                'answer'=>1
            ],
            [
                'question'=>'Terdapat Pelatihan Produk Kimia untuk siswa siswi SMA',
                'ormawa_id'=>9,
                'answer'=>1
            ],
            [
                'question'=>'Selain BPH, KSM Teknik Kimia memiliki 4 divisi lainnya',
                'ormawa_id'=>9,
                'answer'=>1
            ],
            [
                'question'=>'PRD merupakan divisi yang bertanggung jawab dalam mengoordinasi hubungan dengan pihak internal dari KSM Teknik Kimia Ubaya',
                'ormawa_id'=>9,
                'answer'=>0
            ],
            /*KSM TE */
            [
                'question'=>'Arti Kucing dari Maskot KSM Teknik Elektro adalah mengidentifikasikan bahwa di Ubaya terdapat banyak kucing di dalam kampusnya',
                'ormawa_id'=>7,
                'answer'=>1
            ],
            [
                'question'=>'KSM Teknik Elektro memiliki 6 divisi lainnya',
                'ormawa_id'=>7,
                'answer'=>0
            ],
            [
                'question'=>'Arti Steker dari Maskot KSM Teknik Elektro adalah ekor sebagai pengisi ulang daya milik Maskot KSM Teknik Elektro',
                'ormawa_id'=>7,
                'answer'=>0
            ],
            [
                'question'=>'CDD merupakan kepanjangan dari Communication and Design Department',
                'ormawa_id'=>7,
                'answer'=>0
            ],
            [
                'question'=>'RCD merupakan divisi yang memiliki tanggung jawab utama dalam menjaga hubungan sosial baik antar anggota KSM Teknik Elektro maupun eksternal dengan ormawa lain',
                'ormawa_id'=>7,
                'answer'=>1
            ],
            /*KSM TMM*/
            [
                'question'=>'Slogan KSM TMM adalah “WE MAKE IT REAL”',
                'ormawa_id'=>10,
                'answer'=>0
            ],
            [
                'question'=>'RND adalah mempererat hubungan antar seluruh anggota KSM TMM',
                'ormawa_id'=>10,
                'answer'=>0
            ],
            [
                'question'=>'KSM TMM merupakan singkatan dari Kelompok Studi Mahasiswa Teknik Mesin dan Manufaktur',
                'ormawa_id'=>10,
                'answer'=>1
            ],
            [
                'question'=>'KSM Teknik Mesin dan Manufaktur memiliki 5 divisi',
                'ormawa_id'=>10,
                'answer'=>0
            ],
            [
                'question'=>'Divisi Internal memiliki tugas yaitu mengeratkan hubungan antar seluruh anggota KSM serta memberikan pelatihan soft skill dan motivasi untuk anggota KSM',
                'ormawa_id'=>10,
                'answer'=>1

            ],
            /*KSM IF*/
            [
                'question'=>'KSM Informatika berdiri sejak Tahun 1998',
                'ormawa_id'=>6,
                'answer'=>0
            ],
            [
                'question'=>'Termasuk BPH, KSM Informatika memiliki 4 divisi',
                'ormawa_id'=>6,
                'answer'=>0
            ],
            [
                'question'=>'Kepanjangan dari KSM IF adalah Kelompok Studi Mahasiswa Teknik Informatika',
                'ormawa_id'=>6,
                'answer'=>0
            ],
            [
                'question'=>'Divisi HRDD adalah Human Resource Development Department',
                'ormawa_id'=>6,
                'answer'=>1
            ],
            [
                'question'=>'Divisi CDD memiliki tugas mengenai penyajian informasi yang berkaitan dengan KSM IF',
                'ormawa_id'=>6,
                'answer'=>1
            ],
            /*KSM FOTMED*/
            [
                'question'=> 'Kepanjangan divisi PC adalah Public Communication',
                'ormawa_id'=>5,
                'answer'=>0
            ],
            [
                'question'=> 'Foto dan Media merupakan sebuah Kelompok Minat Mahasiswa',
                'ormawa_id'=>5,
                'answer'=>0
            ],
            [
                'question'=>'Roll Film Terbuka melambangkan selalu terbuka untuk siapa saja',
                'ormawa_id'=>5,
                'answer'=>1
            ],
            [
                'question'=>'Tagline KSM Foto & Media adalah “Welcome Home”',
                'ormawa_id'=>5,
                'answer'=>1
            ],
            [
                'question'=>'Divisi Photography and Digital Hunting bergerak dibidang dokumentasi perfilman',
                'ormawa_id'=>5,
                'answer'=>0
            ],
            /*KMM SPORTS*/
            [
                'question'=>'Terdapat 4 Divisi di KMM SPORTS',
                'ormawa_id'=>4,
                'answer'=>0
            ],
            [
                'question'=>'KMM SPORTS Hanya mewadahi olahraga fisik',
                'ormawa_id'=>4,
                'answer'=>0
            ],
            [
                'question'=>'Olahraga Flag Footbal juga termasuk di dalam KMM SPORTS',
                'ormawa_id'=>4,
                'answer'=>0
            ],
            [
                'question'=>'Pada Divisi Sports terdapat SUB Basket, SUB Badminton, SUB Futsal, dan SUB Tennis Meja',
                'ormawa_id'=>4,
                'answer'=>1
            ],
            [
                'question'=>'Terdapat 2 wakil dalam KMM SPORTS',
                'ormawa_id'=>4,
                'answer'=>0
            ],
            /*KMM RK*/
            [
                'question'=>'Slogan KMM Radio Kampus adalah “Fresh Your Mind with Entertainment Radio”',
                'ormawa_id'=>3,
                'answer'=>0
            ],
            [
                'question'=>'Frekuensi FM KMM Radio Kampus adalah 101.9 E-FM',
                'ormawa_id'=>3,
                'answer'=>0
            ],
            [
                'question'=>'Music Director bertugas mencari dan memilah bahan materi siaran',
                'ormawa_id'=>3,
                'answer'=>0
            ],
            [
                'question'=>'KMM Radio Kampus memiliki 2 divisi',
                'ormawa_id'=>3,
                'answer'=>0
            ],
            [
                'question'=>'Tugas dari Design and Social Media adalah mengelola segala hal yang berkaitan dengan desain dan management social media',
                'ormawa_id'=>3,
                'answer'=>1
            ],
            /*KMM PPM*/
            [
                'question'=>'Kepanjangan divisi RMD adalah Relation Media Documentation',
                'ormawa_id'=>2,
                'answer'=>1
            ],
            [
                'question'=>'Lokasi Ruangan KMM PPM terdapat di TC 1.6',
                'ormawa_id'=>2,
                'answer'=>0
            ],
            [
                'question'=>'KMM PPM memiliki kegiatan Live In',
                'ormawa_id'=>2,
                'answer'=>1
            ],
            [
                'question'=>'Live In adalah kegiatan bonding antar anggota KMM PM',
                'ormawa_id'=>2,
                'answer'=>0
            ],
            [
                'question'=>'Kepanjangan PPM adalah Pengabdian Pada Masyarakat',
                'ormawa_id'=>2,
                'answer'=>1
            ]
        ]);
    }
}
