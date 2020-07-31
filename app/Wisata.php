<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table="tempatwisata";
    protected $fillable = [
        'NamaLokasi', 'AlamatLokasi', 'JenisWisata', 'Fasilitas', 'HargaTiket', 
    ];
}
