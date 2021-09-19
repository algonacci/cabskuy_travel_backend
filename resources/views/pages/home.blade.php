@extends('layouts.app')

@section('title')
    Cabskuy Travel
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1 class="mt-5">Jelajahi Nusantara Dengan
            <br>
            Beragam Keindahannya
        </h1>
        <p>
            Temukan paket perjalanan ke seluruh daerah <br>
            di Indonesia bersama Cabskuy Travel
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-2">
            Cabs Kuy!
        </a>
    </header>
    <!-- Akhir Header -->

    <!-- Main Section -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail text-center">
                    <h2>20rb</h2>
                    <p>Pengguna</p>
                </div>
                <div class="col-3 col-md-2 stats-detail text-center">
                    <h2>12</h2>
                    <p>Negara</p>
                </div>
                <div class="col-3 col-md-2 stats-detail text-center">
                    <h2>13rb</h2>
                    <p>Jaringan Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail text-center">
                    <h2>88</h2>
                    <p>Partner</p>
                </div>
            </section>
        </div>

        <!-- Destinasi Terpopuler -->
        <section class="section-terpopuler" id="populer">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-populer-heading">
                        <h2>Destinasi Terpopuler</h2>
                        <p>Jelajahi tempat-tempat menarik dan unik <br>di masing-masing kota
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-konten-populer" id="kontenPopuler">
            <div class="container">
                <div class="section-destinasi-populer row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-destinasi text-center d-flex flex-column"
                            style="background-image: url('/frontend/images/danau\ toba.jpg')">
                            <div class="lokasi-destinasi">DANAU TOBA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    Lihat Detailnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-destinasi text-center d-flex flex-column"
                            style="background-image: url('/frontend/images/bromo.jpg')">
                            <div class="lokasi-destinasi">BROMO</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    Lihat Detailnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-destinasi text-center d-flex flex-column"
                            style="background-image: url('/frontend/images/bajo.jpg')">
                            <div class="lokasi-destinasi">LABUHAN BAJO</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    Lihat Detailnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-destinasi text-center d-flex flex-column"
                            style="background-image: url('/frontend/images/bali.jpg')">
                            <div class="lokasi-destinasi">BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ url('/detail') }}" class="btn btn-travel-details px-4">
                                    Lihat Detailnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Destinasi Terpopuler -->

        <!-- Section Network -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Pelanggan Setia Kami</h2>
                        <p>
                            Pelanggan yang melakukan lebih<br>dari 1 trip bersama kami
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="/frontend/images/logos_partner.png" alt="Parner Kami" class="img-partner">
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Section Network -->

        <!-- Testimonial -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Mereka Memilih Kami</h2>
                        <p>Our Happy Traveller</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/testimonial 1.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Risky</h3>
                                <p class="testimonial">“ It was glorious and I could
                                    not stop to say wohooo for
                                    every single moment
                                    Dankeeeeee “</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/testimonial 3.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testimonial">“ The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more “</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Raja Ampat
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/testimonial 2.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Sandhika Galih</h3>
                                <p class="testimonial">“ I loved it when the waves
                                    was shaking harder — I was
                                    scared too “</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="https://api.whatsapp.com/send?phone=6282125609413&text=Halo%20Admin%20Cabskuy%20Travel"
                            class="btn btn-need-help px-4 mt-4 mx-1"><i class="bi bi-whatsapp p-2"></i> Saya mau
                            nanya-nanya</a>
                        <a href="#" class="btn btn-get-started px-5 mt-4 mx-1">Booking seat liburan</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Testimonial -->
    </main>
    <!-- Akhir Main Section -->
@endsection