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
                            <h1>Siapa aja yang pergi?</h1>
                            <p>Perjalanan ke Nusa Penida</p>
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
                                        <tr>
                                            <td><img src="{{ url('frontend/images/avatar1.png') }}" alt="Avatar" height="60"></td>
                                            <td class="align-middle">
                                                Angga Risky
                                            </td>
                                            <td class="align-middle">
                                                Bandung Raya
                                            </td>
                                            <td class="align-middle">
                                                Tidak Ada
                                            </td>
                                            <td class="align-middle">
                                                Aktif
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/delete.png') }}" alt="Delete">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ url('frontend/images/avatar2.png') }}" alt="Avatar" height="60"></td>
                                            <td class="align-middle">
                                                Galih Pratama
                                            </td>
                                            <td class="align-middle">
                                                Jakarta
                                            </td>
                                            <td class="align-middle">
                                                Ada
                                            </td>
                                            <td class="align-middle">
                                                Aktif
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/images/delete.png') }}" alt="Delete">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add member</h2>
                                <form class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2"
                                        id="inputUsername" placeholder="Username">

                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                        <option value="VISA" selected>VISA</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport"
                                            placeholder="DOE Passport">
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
                                    <td width="50%" class="text-right">2 orang</td>
                                </tr>
                                <tr>
                                    <th width="50%">Biaya Tambahan</th>
                                    <td width="50%" class="text-right">Rp50.000</td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga Trip</th>
                                    <td width="50%" class="text-right">Rp500.000 / orang</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Harga</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">Rp1.050.000</span>
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
                            <a href="{{ route('checkout-sukses') }}" 
                                class="btn btn-block btn-join-now py-2 text-center">Konfirmasi Pembayaran</a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail') }}" class="text-muted">
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
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
                }
            })
        });
    </script>
@endpush