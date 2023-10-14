<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexadmin()
    {
        //
        return view('pages.admin.table.pembayaran.index', [
            'pembayarans' => Pembayaran::all()
        ]);
    }

    public function index()
    {
        //
        $kategoris = Kategori::all();
        return view('pages.user.content.pembayaran', [
            'title' => 'Pembayaran',
            'categoris' => $kategoris,
            'pembayarans' => Pembayaran::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategoris = Kategori::all();
        return view('pages.user.content.ticketing', [
            'title' => 'Ticekting',
            'categoris' => $kategoris
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'bukti_pemb' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama.required' => "Silahkan isi Nama Lengkap",
            'no_telp.required' => "Silahkan isi Nomor Telepon yang bisa dihubungi",
            'email.required' => "Silahkan isi Email yang aktif",
            'alamat.required' => "Silahkan isi Alamat",
            'bukti_pemb.required' => "Silahkan Upload bukti pembayaran",
            'bukti_pemb.image' => "File harus berjenis gambar",
            'bukti_pemb.mimes' => "Jenis File yang diterima: jpeg, png, jpg",
        ]);
        // dd($validated);

        $filename = time() . '.' . $request->file('bukti_pemb')->extension();
        $request->file('bukti_pemb')->move('buktipembayaran', $filename);

        $validated['bukti_pemb'] = $filename;


        // dd($validated);

        $request->user()->pembayarans()->create($validated);

        // dd($validated);

        return redirect(route('user.ticketing'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pembayaran = Pembayaran::where('id', $id)->first();

        $kategoris = Kategori::all();
        return view('pages.user.content.pembayarantunggal', [
            'title' => 'Ticekting',
            'categoris' => $kategoris,
            'pembayaran' => $pembayaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('pages.admin.table.pembayaran.edit', [
            'pembayaran' => Pembayaran::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
        // dd($pembayaran);
        // $this->authorize('update', $pembayaran);

        $user = User::where('id', $pembayaran->user_id)->first();
        // dd($user);

        // dd($user);
        $pembayaran->update([
            'status' => true
        ]);


        // Notification::route('mail', $pembayaran->email)
        // ->notify(new EmailNotification($pembayaran));

        return redirect()->back()->with('success', 'Pembayaran Telah Di ACC');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
