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

                    @if (session('succes'))
                        <div class="alert alert-success"> Berhasil ! </div>
                    @endif
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            List Semua Pembayaran

                            .
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Pembayaran Table
                        </div>

                        <div class="card-body">

                            <table id="datatablesSimple">


                                <thead>

                                    <tr>
                                        <th>id</th>
                                        <th>Nama</th>
                                        <th> Email </th>
                                        <th> Alamat </th>
                                        <th> No Telp </th>
                                        <th> Created at </th>
                                        <th> Update at </th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Nama</th>
                                        <th> Email </th>
                                        <th> Alamat </th>
                                        <th> No Telp </th>
                                        <th> Created at </th>
                                        <th> Update at </th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($pembayarans as $pembayaran)
                                        <tr>
                                            <td>{{ $pembayaran->id }}</td>
                                            <td>{{ $pembayaran->nama }}</td>
                                            <td>{{ $pembayaran->email }}</td>
                                            <td>{{ $pembayaran->alamat }} </td>
                                            <td>{{ $pembayaran->no_telp }} </td>
                                            <td> {{ $pembayaran->created_at }}</td>
                                            <td>{{ $pembayaran->updated_at }}</td>
                                            <td>

                                                <a href="{{ route('pembayaran.editadmin', $pembayaran->id) }}"><button
                                                        type="submit" class="btn btn-success"><i
                                                            class="bi bi-pencil-square"></i></button></a>

                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
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
