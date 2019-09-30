<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelcontroller extends Controller
{
    public function index(){
        //Elaquent => ORM (Object Relational Mapping)
        $listKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel

        //blade
        return view('kategori_artikel.index' ,compact('listKategoriArtikel'));
        // return $listKategoriArtikel;
    }

    public function show($id){
        //Elaquent
        // $KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select * from kategori_artikel where id=$id limit 1
        $KategoriArtikel=KategoriArtikel::find($id);

        return view('kategori_artikel.show' ,compact('KategoriArtikel'));


    }
}

