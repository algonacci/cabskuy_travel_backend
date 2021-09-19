@extends('layouts.app')
@section('title', 'Detail Perjalanan')

@section('content')
    <!-- Main Section -->
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb px-3 mt-3">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Detail Wisata
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0 py-3">
                        <div class="card card-details">
                            <h1>Nusa Penida</h1>
                            <p>Bali, Indonesia</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="/frontend/images/penida_thumb.jpg" alt="Nusa Penida" class="xzoom"
                                        id="xzoom-default" xoriginal="/frontend/images/penida_thumb.jpg">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="/frontend/images/penida_thumb.jpg">
                                        <img src="/frontend/images/penida_thumb.jpg" class="xzoom-gallery" width="128"
                                            xpreview="/frontend/images/penida_thumb.jpg">
                                    </a>
                                    <a href="/frontend/images/penida1.jpg">
                                        <img src="/frontend/images/penida1.jpg" class="xzoom-gallery" width="128"
                                            xpreview="/frontend/images/penida1.jpg">
                                    </a>
                                    <a href="/frontend/images/penida2.jpg">
                                        <img src="/frontend/images/penida2.jpg" class="xzoom-gallery" width="128"
                                            xpreview="/frontend/images/penida2.jpg">
                                    </a>
                                    <a href="/frontend/images/penida3.jpg">
                                        <img src="/frontend/images/penida3.jpg" class="xzoom-gallery" width="128"
                                            xpreview="/frontend/images/penida3.jpg">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Nusa Penida merupakan salah satu pulau cantik di Bali yang menawarkan pengalaman
                                berlibur yang berkesan. Nusa Penida terletak di selatan pulau bali dan berdampingan
                                dengan dua pulau terkenal lainnya, yaitu Nusa Ceningan dan Nusa Lembongan. Ketiganya
                                memiliki keindahan panorama yang menakjubkan, hanya saja Nusa Penida berukuran lebih
                                luas dibandingkan kedua pulau lainnya.
                                <br>
                                <br>
                                Di Nusa Penida juga diadakan berbagai festival budaya. Salah satunya adalah “Festival
                                Nusa Penida” yang diadakan satu tahun sekali, yang di dalamnya juga terdapat tari Rejang
                                Dewa yang melibatkan penari perempuan sekitar 1.000 penari dan tari baris jangkang yang
                                melibatkan penari pria. Selain itu, ada juga berbagai kegiatan menarik lainnya seperti
                                lomba jukung atau perahu nelayan,kongser musik, kebersihan pantai, pameran kerajinan
                                tenun dll. Di kawasan ini, Anda juga dapat menyaksikan penanaman terumbu karang.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="/frontend/images/ic_event.png" class="features-image" alt="">
                                        <div class="description">
                                            <h3>Acara Menarik</h3>
                                            <p>Tari Kecak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-start">
                                    <div class="description">
                                        <img src="/frontend/images/ic_bahasa.png" class="features-image" alt="">
                                        <div class="description">
                                            <h3>Bahasa</h3>
                                            <p>Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-start">
                                    <div class="description">
                                        <img src="/frontend/images/ic_makanan.png" class="features-image" alt="">
                                        <div class="description">
                                            <h3>Makanan</h3>
                                            <p>Makanan Lokal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div class="card card-details card-right">
                            <h2>Wisatawan yang bergabung</h2>
                            <div class="members my-2">
                                <img src="/frontend/images/member1.png" alt="member1" class="member-image mr-1">
                                <img src="/frontend/images/member2.png" alt="member1" class="member-image mr-1">
                                <img src="/frontend/images/member3.png" alt="member1" class="member-image mr-1">
                                <img src="/frontend/images/member4.png" alt="member1" class="member-image mr-1">
                                <img src="/frontend/images/testimonial 1.png" alt="member1" class="member-image mr-1">
                                <img src="/frontend/images/member5.png" alt="member1" class="member-image mr-1">
                            </div>
                            <hr>
                            <h2>Informasi Perjalanan</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Keberangkatan</th>
                                    <td width="50%" class="text-end">22 December 2021</td>
                                </tr>
                                <tr>
                                    <th width="50%">Durasi</th>
                                    <td width="50%" class="text-end">4 Hari 3 Malam</td>
                                </tr>
                                <tr>
                                    <th width="50%">Sifat Trip</th>
                                    <td width="50%" class="text-end">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga</th>
                                    <td width="50%" class="text-end">Rp500.000 / orang</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container d-grid gap-2 rounded-circle">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now py-2 text-center">Pesan
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Akhir Main Section -->
@endsection

@push('prepend-style')
    <!-- xZoom -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush