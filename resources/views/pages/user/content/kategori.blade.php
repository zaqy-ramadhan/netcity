@extends('layouts.appUtama')

@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading" style="font-weight: bold">Category: <span
                            style="color: rgba(206, 245, 61, 0.8)">{{ $kategoris->nama_kategori }}</span> </div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    @foreach ($kategoris->modul as $modul)
                        <div class="blog-entry d-flex blog-entry-search-item bg-light">
                            <a href="{{ route('user.modul', $modul->id_modul) }}" class="img-link me-4">
                                <img src="{{ asset('imgModul/' . $modul->gambar_modul) }}" alt="Image" class="img-fluid"
                                    style="max-width: 220px; max-height: 160px;">
                            </a>
                            <div>
                                <span>{{ $kategoris->nama_kategori }}</span>
                                <h2><a href="{{ route('user.modul', $modul->id_modul) }}">{{ $modul->nama_modul }}</a></h2>
                                <p><a href="{{ route('user.modul', $modul->id_modul) }}" class="btn btn-sm btn-outline-primary bold">Read
                                        More</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- woi partials user categories gausa dipisah tak delek kene ae dadi siji --}}
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-box">
                        <h3 class="heading" style="font-weight: bold;">Categories</h3>
                        <ul class="categories">
                            @foreach ($categorys as $category)
                                <li><a href="{{ route('user.kategori', $category->id_kategori) }}"
                                        style="color: black; text-decoration: none; ">{{ $category->nama_kategori }}<span>{{ count($category->modul) }}</span></a>
                                </li>
                                {{-- <li><a href="{{ route('user.kategori') }}" style="color: black; text-decoration: none; ">Media and Entertainment<span>(22)</span></a></li>
                            <li><a href="{{ route('user.kategori') }}" style="color: black; text-decoration: none; ">Design Communication<span>(37)</span></a></li>
                            <li><a href="{{ route('user.kategori') }}" style="color: black; text-decoration: none; ">Fashion and Apparel<span>(42)</span></a></li>
                        </ul> --}}
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
