<?php

use Illuminate\Database\Seeder;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $prestasi = new Prestasi();
        $prestasi->gambar="41Ys50_prestasi.jpg";
        $prestasi->judul="training";

          $prestasi->save();
    }
}
