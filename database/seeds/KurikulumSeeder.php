<?php

use Illuminate\Database\Seeder;

class KurikulumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $kurikulum = new kurikulum();
        $kurikulum->foto="09e84557eb78b5f919db5a871f16c2a8.jpg";
        $kurikulum->nama="Romi Rumianto";
        
        $kurikulum->jabatan="Kaprog TKR";
        $kurikulum->target="Teknik Kendaraan Ringan
        01. KELAS X : Engine dan Tune up Konvensional
        02. KELAS XI : chasis dan Powertraint
        03. KELAS XII : Service Berkala 40.000 KM ";

          $kurikulum->save();
    }
}
