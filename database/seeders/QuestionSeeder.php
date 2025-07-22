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
            /*DPM FT  DONE */
            [
                'question'=>'Divisi Audit bertugas untuk mengawasi kegiatan-kegiatan ORMAWA FT dari segi proposal LPJ, dan audit lapangan (saat kegiatan berlangsung). Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>1,
                
            ],
            [
                'question'=>'Apa nama peraturan yang hanya mengatur satu ormawa tertentu dan diperiksa oleh DPM?',
                'ormawa_id'=>1,
                
            ],
            [
                'question'=>'Ada berapa total divisi dalam DPM FT ini?',
                'ormawa_id'=>1,
                
            ],
            [
                'question'=>'Singkatan dari DPM FT adalah singkatan dari Dewan Perwakilan Masyarakat Fakultas Teknik. Pernyataan tersbut benar atau salah?',
                'ormawa_id'=>1,
                
            ],
            [
                'question'=> 'Aspirasi mahsiswa Fakultas Teknik dapat disampaikan melalui DPM FT untuk diteruskan ke Dekanat Fakultas Teknik. Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>1,
                
            ],
            /*BEM FT*/
            [
                'question'=>'Ada berapa total divisi di BEM FT ini?',
                'ormawa_id'=>11,
                
            ],
            [
                'question'=>'Tugas dari divisi ID adalah mengurus peminjaman barang inventaris BEM FT. Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>11,
                
            ],
            [
                'question'=>'Singkatan dari IDD  pada salah satu divisi di BEM FT adalah Information and Design Department',
                'ormawa_id'=>11,
                
            ],
            [
                'question'=>'Badan Pengurus Harian (BPH) terdiri dari Gubernur, Wakil Gubernur, Sekretaris 1, Sekretaris 2, Bendahara 1, dan Bendahara 2. Benar atau salah pernyataan tersebut?',
                'ormawa_id'=>11,
                
            ],
            [
                'question'=>'Mengurus segala administrasi berupa pengauditan proposal dan laporan pertanggungjawaban dari ORMAWA FT adalah tugas dari divisi...',
                'ormawa_id'=>11,
                
            ],
            /*KSM TI*/
            [
                'question'=>'Divisi yang bertugas untuk menjalin hubungan serta relasi dengan eksternal KSM TI adalah tugas dari divisi?',
                'ormawa_id'=>8,
                
            ],
            [
                'question'=>'Ada berapa total divisi yang ada di KSM TI ini?',
                'ormawa_id'=>8,
                
            ],
            [
                'question'=>'Tugas BPH adalah mengatur dan berkoordinasi internal serta external KSM TI. Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>8,
                
            ],
            [
                'question'=> 'Divisi Entrepreneur memiliki tugas untuk meningkatkan kemampuan hardskill KSM TI. Pernyataan tersebut benar atau salah',
                'ormawa_id'=>8,
                
            ],
            [
                'question'=>'Tugas divisi Entrepreneur adalah untuk mempererat hubungan 100% family KSM TI. Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>8,
                
            ],
            /*KSM TK*/
            [
                'question'=>'Benar atau salah, program kerja KSM Teknik Kimia adalah Dialog Dosen Mahasiswa?',
                'ormawa_id'=>9,
                
            ],
            [
                'question'=>'Salah satu program kerja KSM Teknik Kimia berupa kegiatan perkenalkan jurusan bagi siswa-siswi SMA adalah..',
                'ormawa_id'=>9,
                
            ],
            [
                'question'=>'Apa saja divisi yang ada di KSM Teknik Kimia',
                'ormawa_id'=>9,
                
            ],
            [
                'question'=>'Benar atau salah tugas dari divisi IPD adalah membangun dan menjaga kekeluargaan antara anggota KSM TK?',
                'ormawa_id'=>9,
                
            ],
            [
                'question'=>'Kegiatan rutin tahunan bagi warga Teknik Kimia yang diwadahi oleh KSM Teknik Kimia berupa kunjungan ke perusahaan-perusahaan di luar kota adalah..',
                'ormawa_id'=>9,
                
            ],
            /*KSM TE */
            [
                'question'=>'Di mana letak ruangan KSM TE?',
                'ormawa_id'=>7,
                
            ],
            [
                'question'=>'Ada berapa divisi di KSM TE?',
                'ormawa_id'=>7,
                
            ],
            [
                'question'=>'Benar atau salah, salah satu tugas dari KSM Teknik Elektro adalah menjadi pelaksana kegiatan kuliah tamu di Teknik Elektro',
                'ormawa_id'=>7,
                
            ],
            [
                'question'=>'Apa kepanjangan dari divisi RCD di KSM Teknik Elektro?',
                'ormawa_id'=>7,
                
            ],
            [
                'question'=>'Benar atau atau salah, divisi yang bertugas untuk mengelola sosial media KSM Teknik Elektro adalah CDD?',
                'ormawa_id'=>7,
                
            ],
            /*KSM TMM*/
            [
                'question'=>'Benar atau salah, terdapat 3 divisi dalam KSM TMM?',
                'ormawa_id'=>10,
                
            ],
            [
                'question'=>'Apa slogan KSM TMM?',
                'ormawa_id'=>10,
                
            ],
            [
                'question'=>'Benar atau salah tugas dari divisi Eksternal KSM TMM adalah meningkatkan hardskill dan softskill para anggota KSM melalui kegiatan yang diadakan di dalam lingkup KSM?',
                'ormawa_id'=>10,
                
            ],
            [
                'question'=>'Berikut merupakan divisi yang ada di KSM TMM kecuali..',
                'ormawa_id'=>10,
                
            ],
            [
                'question'=>'Divisi yang bertugas untuk melakukan kajian tentang teknologi yang sedang berkembang di dunia manufaktur dan memberikan pelatihan yang dapat berguna di dunia kuliah maupun kerja adalah…',
                'ormawa_id'=>10,
                

            ],
            /*KSM IF*/
            [
                'question'=>'Divisi apa yang memiliki tugas untuk  menjalin hubungan dengan pihak luar KSM (baik dalam lingkup UBAYA, maupun luar UBAYA)?',
                'ormawa_id'=>6,
                
            ],
            [
                'question'=>'Total divisi yang ada di KSM IF ini adalah...',
                'ormawa_id'=>6,
                
            ],
            [
                'question'=>'Singkatan Divisi HRDD dalam KSM IF adalah Human Resource Department Development. Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>6,
                
            ],
            [
                'question'=>'KSM IF terletak di TF lantai 4.10. Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>6,
                
            ],
            [
                'question'=>'Yang memiliki tugas untuk memimpin KSM IF agar dapat berjalan dengan baik dan dapat mencapai visi dan misi KSM IF adalah tugas BPH yakni Ketua. Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>6,
                
            ],
            /*KSM FOTMED*/
            [
                'question'=> 'Apa jargon KSM Foto dan Media?',
                'ormawa_id'=>5,
                
            ],
            [
                'question'=> 'Ada berapa banyak acara eksternal yang diadakan oleh KSM Foto dan Media?',
                'ormawa_id'=>5,
                
            ],
            [
                'question'=>'Ada berapa divisi di KSM Foto dan Media?',
                'ormawa_id'=>5,
                
            ],
            [
                'question'=>'Di mana letak ruangan KSM FOTMED?',
                'ormawa_id'=>5,
                
            ],
            [
                'question'=>'Benar atau salah kepanjangan dari divisi PDH KSM Foto dan Media adalah Photography and Digital Hunter?',
                'ormawa_id'=>5,
                
            ],
            /*KMM SPORTS*/
            [
                'question'=>'Dalam divisi sports terdapat cabang bulu tangkis. Pernyataan tersebut benar atau salah?',
                'ormawa_id'=>4,
                
            ],
            [
                'question'=>'Fungsi divisi DDD dalam kmm sports digunakan untuk promosi. Pernyataan tersebut benar atau salah',
                'ormawa_id'=>4,
                
            ],
            [
                'question'=>'Nala sangat ingin bergabung dengan KMM Sports, namun dia kurang yakin dengan kemampuan olahraganya. Tapi di sisi lain Nala sangat mahir bermain game online. Divisi apa yang cocok dengan kondisi Nala saat ini…',
                'ormawa_id'=>4,
                
            ],
            [
                'question'=>'KMM Sports biasa melakukan latihan rutin di Ubaya Sport Center. Pernytaan tersebut benar atau salah ?',
                'ormawa_id'=>4,
                
            ],
            [
                'question'=>'Ada berapa total divisi di kmm sport?',
                'ormawa_id'=>4,
                
            ],
            /*KMM RK*/
            [
                'question'=>'Benar atau salah, ada 3 divisi di KMM RK?',
                'ormawa_id'=>3,
                
            ],
            [
                'question'=>'Berikut divisi yang ada di KMM RK, kecuali:',
                'ormawa_id'=>3,
                
            ],
            [
                'question'=>'Event apa yang baru saja selesai diselenggarakan oleh KMM RK dengan mengundang seorang pembicara?',
                'ormawa_id'=>3,
                
            ],
            [
                'question'=>'Benar atau salah, salah satu tugas dari divisi produser adalah mengedit audio?',
                'ormawa_id'=>3,
                
            ],
            [
                'question'=>'Jika seorang mahasiswa ingin mendaftar KMM RK dan ia memiliki kemampuan yang baik dalam mengatur jadwal, sehingga kompeten untuk mengatur jadwal siaran RK, maka mahasiswa tersebut tepat untuk mendaftar di divisi..',
                'ormawa_id'=>3,
                
            ],
            /*KMM PPM*/
            [
                'question'=>'Di manakah letak KMM PPM?',
                'ormawa_id'=>2,
                
            ],
            [
                'question'=>'Ada berapa divisi dalam KMM PPM?',
                'ormawa_id'=>2,
                
            ],
            [
                'question'=>'Benar atau salah, salah satu aksi yang dilakukan oleh KMM PPM adalah donor darah?',
                'ormawa_id'=>2,
                
            ],
            [
                'question'=>'Benar atau salah, KMM PPM pernah melakukan kegiatan live in untuk melayani masyarakat?',
                'ormawa_id'=>2,
                
            ],
            [
                'question'=>'Apa slogan KMM PPM?',
                'ormawa_id'=>2,
                
            ]
        ]);
    }
}
