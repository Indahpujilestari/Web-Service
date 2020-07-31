<?php

use Illuminate\Database\Seeder;
use App\Wisata;

class WisataSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i=1; $i < 11; $i++){
             $data = Wisata::create([
                 'NamaLokasi' => "Sembalun. $i",
                 'AlamatLokasi' => "Jln pendidikan No. $i",
                 'JenisWisata' => "Taman.$i",
                 'Fasilitas' => "Taman Buah.$i",
                 'HargaTiket' => "10000.$i",
             ]);
            }
        
    }
}
