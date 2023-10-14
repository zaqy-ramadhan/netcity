@extends('layouts.appUtama')

@section('content')

    <div class="container mt-3">
        <div class="mt-3">
            <div class="card mb-3" style="">
                <div class="card-body">
                    <h5 class="card-title">{{ date('d M Y - H:i', $pembayaran->created_at->timestamp) }}</h5>
                    <p class="card-text"><span style="font-weight: bold">Nama :</span> {{ $pembayaran->nama }}</p>
                    <p class="card-text"><span style="font-weight: bold">Alamat :</span> {{ $pembayaran->alamat }}</p>
                    <p class="card-text"><span style="font-weight: bold">Email :</span> {{ $pembayaran->email }}</p>
                    <p class="card-text"><span style="font-weight: bold">No Telp :</span> {{ $pembayaran->no_telp }}</p>
                    <p style="font-weight: bold">Status : </p>
                    @if ($pembayaran->status)
                    <p class="text-primary">Selesai</p>
                    @else
                    <p class="text-warning">Sedang diproses</p>
                    @endif
                    <img src="{{ asset("buktipembayaran/".$pembayaran->bukti_pemb) }}" alt="" class="mw-100">
                </div>
            </div>
        </div>
    </div>

@endsection
