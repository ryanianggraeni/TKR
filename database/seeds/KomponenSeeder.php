<?php

use Illuminate\Database\Seeder;
use App\Komponen;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $komponen = new Komponen();
        $komponen->logo="logo-1.png";
        $komponen->profil="SMK Assalaam Bandung merupakan sekolah kejuruan dengan kompetensi keahlian TKR,RPL,TSM. Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar kerja, agar lulusan nya siap menghadapi perubahan.
                SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai inovasi dan improvisasi, mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.
                Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang lengkap UP TO DATE, waktu praktek memadai dan praktek berstandar industri dengan layanan prima.
                Pilihan bermutu bagi generasi maju. Sekolah terpilih pelaksana kurikulum berbasis industri yang siap mencetak calon2 mekanik yang handal dan berkulaitas. Siswa yang kompoten dan keterampilan, pengetahuan,mental,dan sikap berakhlakul karimah adalah modal utama kami unutk melahirkan Mekanik Otomotif dan Service Advancer yang siap terjun dan bersaing dalam mennjawab kebutuhan industri.";
        
        $komponen->gambar="tkr.jpg";
        $komponen->no="089758538538";
        $komponen->email="smkassalaambadung.sch.id";
		
        $komponen->save();
    }
}
