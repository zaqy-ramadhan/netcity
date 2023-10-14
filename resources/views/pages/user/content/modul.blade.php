@extends('layouts.appUtama')

@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url({{ asset('imgModul/'.$moduls->gambar_modul) }});">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">{{ $moduls->nama_modul }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row my-4">
                        <div class="row-md-6 mb-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('ImgModul/' . $moduls->gambar_modul) }}" alt="Image placeholder"
                                class="img-fluid rounded" style="max-width: 300px; max-height: 200px;">
                        </div>
                    </div>
                    <div class="post-content-body">
                        <article>
                            {{ $moduls->isi_modul }}
                        </article>
                    </div>
                    <div class="download-button">
                        <a href="{{ asset('fileModul/' . $moduls->download_modul) }}" class="btn btn-neon-green border">
                            <i class="bx bxs-file-pdf"></i> Download Modul
                        </a>
                    </div>
                </div>
                <!-- END main-content -->

                <div class="col-lg-4 sidebar">
                    <div class="sidebar-box">
                        <h3 class="heading" style="font-weight: bold;">Categories</h3>
                        <ul class="categories">
                            @foreach ($categorys as $category)
                                <li><a href="{{ route('user.kategori', $category->id_kategori) }}"
                                        style="color: black; text-decoration: none; ">{{ $category->nama_kategori }}<span>{{ count($category->modul) }}</span></a>
                                </li>
                            @endforeach
                    </div>
                </div>
                <!-- END sidebar -->
            </div>
        </div>
    </section>
    <!-- End posts-entry -->
@endsection
