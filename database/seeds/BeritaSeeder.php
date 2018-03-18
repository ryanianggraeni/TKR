<?php

use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $berita = new Berita();
        $berita->gambar="41Ys50_prestasi.jpg";
        $berita->judul="MENUJU KOMPETENSI NASIONAL";
        $berita->isi="Minggu, 28 januari 2018 perwakilan siswa SMK Assalaam Bandung mengikuti ajang MECHANIC'S SKILL COMPETEN 2018 tingkatnasional, dan alhamdulillah prestasi datang kembali kepada SMK Assalaam Bandung setelah melewati babak penyisihan MECHANIC SKILL COMPETEN 2018 tingkat nasional, 2 orang siswa dari SMK Assalaam berhak melaju ke babak semi final"
        $berita->tanggal="2000/08/08";
		
        $berita->save();
    }
}
