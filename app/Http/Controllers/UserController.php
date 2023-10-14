<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Modul;

class UserController extends Controller
{
    public function indexUser(){
        $kategoris = Kategori::with('modul')->take(4)->get();
        foreach ($kategoris as $kategori) {
            // Ambil 3 modul pertama untuk setiap kategori
            $kategori->modul = $kategori->modul->take(3);
        }
        $categoris= Kategori::with('modul')->get();
        return view('pages.user.content.home',compact('kategoris','categoris'));
    }

    public function indexAdmin(){
        return view('pages.admin.content.home');
    }




    public function kategori($id){
        if(Kategori::where('id_kategori',$id)->exists()){
        $kategoris = Kategori::with('modul')->findorFail($id);
        $categoris= Kategori::with('modul')->get();
        $categorys = Kategori::with('modul')->get();
        return view('pages.user.content.kategori',compact('kategoris','categorys','categoris'));
        }
        else{
            return redirect()->back()->with('error', 'Kategori Tidak di Temukan');
        }
    }

    public function modul ($id){
        $moduls = Modul::where('id_modul',$id)->first();
        $categorys=Kategori::with('modul')->get();
        $categoris=Kategori::with('modul')->get();
        return view('pages.user.content.modul',compact('categorys','moduls','categoris'));
    }


}


