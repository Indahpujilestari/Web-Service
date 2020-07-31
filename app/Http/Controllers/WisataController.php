<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Wisata;

class WisataController extends Controller
{
    public function index()
    {
    return Wisata::all();
}

public function create()
{
    //
}

public function store(Request $request)
{
    $data = Wisata::create($request->all());
    return "Data berhasil ditambah"; 
}


public function destroy($id)
{
    $data=Wisata::findorFail($id);
    $data->delete();
    return "Data berhasil dihapus";
} 

public function update(Request $request, $id)
{
    $data=Wisata::findorFail($id);
    $data->NamaLokasi=$request->NamaLokasi;
    $data->AlamatLokasi=$request->AlamatLokasi;
    $data->JenisWisata=$request->JenisWisata;
    $data->Fasilitas=$request->Fasilitas;
    $data->HargaTiket=$request->HargaTiket;
    $data->save();
    return "Data berhasil di update";

}

public function show($id)
{
    $data=Wisata::findorFail($id);
    return $data;

}
}
