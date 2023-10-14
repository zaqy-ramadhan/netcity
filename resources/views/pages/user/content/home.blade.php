@extends('layouts.appUtama')

@section('content')
    <section>
        <div id="banner" class="container-fluid d-flex align-items-center text-center" style="height: 100vh;">
            <div class="container d-flex flex-column align-items-center justify-content-center">
                <div class="col-md-7">
                    <h1 class="hvr-underline-from-center" style="font-family: Champion HTF Featherweight; color:white; font-size: 10rem">NETCITY 2.0</h1>
                </div>
                <div class="col-md-7 mt-2 pt-2 px-4 text-wrap-border-rounded slide-up">
                    <h3 style="font-family: poppins; color:#fff; font-size:medium; font-weight:300">Networking With Creative Industry is a series of events consisting of seminars or workshops that invite mentors from the creative as well as creative exhibitions that aim to introduce the potential of the industries. 
                    </h3>
                </div>
                <div class="mt-4">
                    <img src="{{ asset('images/LogoNetCity.png') }}" class="img-fluid rotate-image slide-up" style="height: 80px;" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End retroy layout blog posts -->

    <section class="section">
        <div class="container">
            <!-- Judul Besar Net City -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h1 style="font-family: Champion HTF Featherweight; font-size:5rem; color:#fff">LAST YEAR<span
                            style="color: rgba(206, 245, 61, 0.8);"> GALLERY</span></h1>
                </div>
            </div>
            <!-- /Judul Besar Net City -->

            <div class="row align-items-stretch retro-layout">
                <div class="col-md-4">
                    <a class="h-entry mb-30 v-height gradient">
                        <div class="featured-img" style="background-image: url('images/kiri atas.jpg');"></div>
                    </a>
                    <a class="h-entry v-height gradient">
                        <div class="featured-img" style="background-image: url('images/kiri bawah.jpg');"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="h-entry img-5 h-100 gradient">
                        <div class="featured-img" style="background-image: url('images/tengah potrait.jpg');"></div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="h-entry mb-30 v-height gradient">
                        <div class="featured-img" style="background-image: url('images/kanan atas.jpg');"></div>
                    </a>
                    <a class="h-entry v-height gradient">
                        <div class="featured-img" style="background-image: url('images/kanan bawah.jpg');"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Kategori --}}
    <div class="row justify-content-center mb-5 mt-5">
        <div class="col-md-8 text-center">
            <h1 style="color:#fff; font-family: Champion HTF Featherweight; font-size:5rem">
                MODUL
            </h1>
        </div>
    </div>
    <div class="container">
        @foreach ($kategoris as $kategori)
            <section class="container bg-light mt-4 mb-4 p-4" style="border-radius:20px">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-sm-6">
                            <h2 class="posts-entry-title">{{ $kategori->nama_kategori }}</h2>
                        </div>
                        <div class="col-sm-6 text-sm-end"><a href="{{ route('user.kategori', $kategori->id_kategori) }}"
                                class="read-more">View All</a>
                        </div>
                    </div>

                    {{-- list kategori Visual Arts and Design --}}
                    <div class="row">
                        @if (count($kategori->modul) > 0)
                            @foreach ($kategori->modul as $modul)
                                <div class="col-lg-4 mb-4">
                                    <div class="post-entry-alt">
                                        <a href="{{ route('user.modul', $modul->id_modul) }}" class="img-link">
                                            <img src="{{ asset('imgModul/' . $modul->gambar_modul) }}" alt="Gambar"
                                                class="img-fluid" style="width: 100%; height: auto;">
                                        </a>
                                        <div class="excerpt">
                                            <h2><a
                                                    href="{{ route('user.modul', $modul->id_modul) }}">{{ $modul->nama_modul }}</a>
                                            </h2>
                                            <p>{{ $modul->isiteaser_modul }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            {{-- <div class="col-lg-12 bg-light"> --}}
                                <p class="text-dark font-weight-bold text-center"
                                    style="font-size: 24px; line-height: 1.5; padding: 20px 0;">Coming Soon</p>
                            {{-- </div> --}}
                        @endif
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
