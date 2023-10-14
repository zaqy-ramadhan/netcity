@extends('layouts.appAdmin')

@section('content')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">ADDONS</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Table
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('kategori.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Kategori
                                </a>
                                <a class="nav-link" href="{{ route('modul.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Modul
                                </a>
                                <a class="nav-link" href="{{ route('pembayaran.indexadmin') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Pembayaran
                                </a>
                            </nav>
                        </div>

                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"> Pembayaran Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            Detail Pembayaran

                            .
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Pembayaran Table
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-body">
                                <p>ID : {{ $pembayaran->id }}</p>
                                <p>Nama : {{ $pembayaran->nama }}</p><br>
                                <p>Alamat : {{ $pembayaran->alamat }}</p><br>
                                <p>Email : {{ $pembayaran->email }}</p><br>
                                <p>No Telp : {{ $pembayaran->no_telp }}</p><br>
                                @if ($pembayaran->status)
                                <p>Status : Selesai</p><br>
                                @else
                                <p>Status : Sedang diproses</p><br>
                                @endif
                                <img src="{{ asset("buktipembayaran/".$pembayaran->bukti_pemb) }}" alt="" class="mw-100">
                                <br>
                            <form action="{{ route('pembayarans.update', $pembayaran) }}" method="POST">
                                @csrf
                                @method('put')

                                <input type="hidden" name="status" value="true">

                                @if (!$pembayaran->status)
                                <button class="btn btn-success mt-3">Acc</button>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
