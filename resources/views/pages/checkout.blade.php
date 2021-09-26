@extends('layouts.checkout')
@section('title', 'Pembayaran')

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
                                <li class="breadcrumb-item">
                                    Detail Wisata
                                </li>
                                <li class="breadcrumb-item active">
                                    Pembayaran
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0 py-3">
                        <div class="card card-details">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h1>Siapa aja yang pergi?</h1>
                            <p>Perjalanan ke {{ $item->travel_package->title }}, {{ $item->travel_package->location }}</p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Foto</td>
                                            <td>Nama</td>
                                            <td>Domisili</td>
                                            <td>Visa</td>
                                            <td>Paspor</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($item->details as $detail)
                                            <tr>
                                                <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" alt="Avatar" height="60" class="rounded-circle"></td>
                                                <td class="align-middle">
                                                    {{ $detail->username }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $detail->domisili }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ $detail->is_visa ? '30 Hari' : 'N/A' }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Aktif' : 'Tidak Aktif' }}
                                                </td>
                                                <td class="align-middle"><a href="{{ route('checkout-remove',$detail->id)}}" class="btn btn-danger"  onclick="return confirm('Yakin Data Mau Dihapus??');">Hapus</a></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak Ada Pengunjung</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Ajakin Teman</h2>
                                <form class="form-inline" method="POST" action="{{ route('checkout-create', $item->id) }}">
                                    @csrf
                                    <label for="username" class="sr-only">Name</label>
                                    <input type="text" name="username" class="form-control mb-2 mr-sm-2"
                                        id="username" placeholder="Email teman kamu" required style="width: 170px">
                                    <label for="domisili" class="sr-only">Domisili</label>
                                    <input type="text" name="domisili" class="form-control mb-2 mr-sm-2" style="width: 100px" required
                                        id="domisili" placeholder="Domisili">
                                    <label for="is_visa" class="sr-only">Visa</label>
                                    <select name="is_visa" id="is_visa" class="custom-select mb-2 mr-sm-2" required>
                                        <option value="" selected>VISA</option>
                                        <option value="1">30 Days</option>
                                        <option value="0">N/A</option>
                                    </select>
                                    <label for="doe_passport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doe_passport" name="doe_passport"
                                            placeholder="DOE Passport" style="width: 150px">
                                    </div>
                                    <button type="submit" class="btn btn-add-now mb-2">
                                        Ajakin
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    Kamu hanya bisa menambahkan orang yang sudah terdaftar di Cabskuy Travel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <div class="card card-details card-right">
                            <h2>Informasi Pembayaran</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Anggota</th>
                                    <td width="50%" class="text-right">{{ $item->details->count() }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Biaya Tambahan</th>
                                    <td width="50%" class="text-right">{{ $item->additional_fee }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga Trip</th>
                                    <td width="50%" class="text-right">Rp{{ $item->travel_package->price }} / orang</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Harga</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">Rp{{ $item->transaction_total }}</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Pembayaran</h2>
                            <p class="payment-instruction">Selesaikan pembayaran Anda</p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" alt="Logo Bank" class="bank-image">
                                    <div class="description">
                                        <h3>PT Cabskuy Wisatama Nusantara</h3>
                                        <p>643 022 4717
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" alt="Logo Bank" class="bank-image">
                                    <div class="description">
                                        <h3>PT Cabskuy Wisatama Nusantara</h3>
                                        <p>1171 0101 7079 509
                                            <br>
                                            Bank BRI
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container d-grid gap-2 rounded-circle">
                            <a href="{{ route('checkout-success', $item->id) }}" 
                                class="btn btn-block btn-join-now py-2 text-center">Konfirmasi Pembayaran</a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail', $item->travel_package->slug) }}" class="text-muted">
                                Batalkan Pesanan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Akhir Main Section -->
@endsection

@push('prepend-style')
    <!-- Gijgo -->
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <!-- JavaScript -->
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function () {

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
                }
            })
        });
    </script>
@endpush