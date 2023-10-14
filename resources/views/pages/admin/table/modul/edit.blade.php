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
                    <h1 class="mt-4"> Kategori Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            Input, Update , Delete Kategori Tables "jangan sembarangan delete"

                            .
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Modul Table
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
                            <form action="{{ route('modul.update',$moduls->id_modul) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label>Name Modul</label></br>

                                <input type="text" name="nama_modul" id="name" class="form-control"
                                   value="{{ old('nama_modul',$moduls->nama_modul) }}" ></br>

                                <label>Name Kategori</label></br>
                                <select class="form-select" name="id_kategori" aria-label="Default select example">
                                    <option selected>Pilih Kategori</option>
                                    @foreach($kategoris as $kategori)
                                    <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                  </select><br>
                                  <label>Isi Modul</label></br>
                                  <textarea type="text" name="isi_modul" class="form-control" value="{{ old('isi_modul',$moduls->isi_modul) }}" > {{ $moduls->isi_modul }}</textarea></br>
                                  <label>Isi Teaser Modul</label></br>
                                  <textarea type="text" name="isiteaser_modul" class="form-control">{{ old('isi_modul',$moduls->isiteaser_modul) }}</textarea></br>
                                  <label>Input Gambar</label></br>
                                  <input type="file" name="gambar_modul" id="name" class="form-control" value="{{ old('gambar_modul/'.$moduls->gambar_modul) }}"></br>
                                  <label>Input Modul</label></br>
                                  <input type="file" name="download_modul" class="form-control" value="{{ old('download_modul',$moduls->download_modul) }}"> </br>
                                  <input type="submit" value="Save" class="btn btn-success"></br>
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
