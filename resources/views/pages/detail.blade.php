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
                            <h1>{{ $item->title }}</h1>
                            <p>{{ $item->location }}</p>
                            @if ($item->galleries->count())
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ Storage::url($item->galleries->first()->image) }}" alt="Nusa Penida" class="xzoom"
                                        id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                                </div>
                                <div class="xzoom-thumbs">
                                    @foreach ($item->galleries as $gallery)
                                    <a href="{{ Storage::url($gallery->image) }}">
                                        <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery" width="128"
                                            xpreview="{{ Storage::url($gallery->image) }}">
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <h2>Tentang Wisata</h2>
                            <p>
                                {!! $item->about !!}
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/ic_event.png') }}" class="features-image" alt="Icon Event">
                                        <div class="description">
                                            <h3>Acara Menarik</h3>
                                            <p>{{ $item->featured_event }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-start">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/ic_bahasa.png') }}" class="features-image" alt="Icon Bahasa">
                                        <div class="description">
                                            <h3>Bahasa</h3>
                                            <p>{{ $item->language }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-start">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/ic_makanan.png') }}" class="features-image" alt="Icon Makanan">
                                        <div class="description">
                                            <h3>Makanan</h3>
                                            <p>{{ $item->foods }}</p>
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
                                    <td width="50%" class="text-end">{{ \Carbon\Carbon::create($item->departure_date)->format('n F Y') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Durasi</th>
                                    <td width="50%" class="text-end">{{ $item->duration }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Sifat Trip</th>
                                    <td width="50%" class="text-end">{{ $item->type }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga</th>
                                    <td width="50%" class="text-end">Rp{{ $item->price }}/orang</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container d-grid gap-2 rounded-circle">
                            @auth
                                <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                        Gabung Trip
                                    </button>
                                </form>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now py-2 text-center">
                                Masuk atau Daftar Dulu
                            </a>
                            @endguest
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