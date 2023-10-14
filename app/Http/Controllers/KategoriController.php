<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris=Kategori::all();
        return view('pages.admin.table.kategori.index',compact('kategoris'));
    }

    public function showNavbar()
    {
        $kategoris = Kategori::all();
        return view('partials.user.navbar', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.table.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateddata= $request->validate([
            'nama_kategori'=>'required',
        ]);

       $kategori= Kategori::create($validateddata);
       if($kategori){
        return redirect()->route('kategori.index')->with('succes','Berhasil !');
       }
       else{
        return redirect()->back()->with('error','Failed !');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategoris = Kategori::findOrFail($id);
        return view('pages.admin.table.kategori.edit',compact('kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

    {
        $validateddata = $request->validate([
            'nama_kategori'=>'required|max:100'
        ]

        );
        $kategori = Kategori::findOrFail($id);
        $valid = $kategori->update($validateddata);
       if($valid){
        return redirect()->route('kategori.index')->with('succes','Berhasil !');
       }
       else{
        return redirect()->back()->with('error','Failed ! ');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('succes','Berhasil !');
    }
}
