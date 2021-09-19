@extends('layouts.success')
@section('title', 'Sukses Bayar')

@section('content')
    <!-- Main Section -->
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/checkout success.png') }}" alt="Sukses Checkout">
                <h1 class="mt-5">Yeay! Berhasil</h1>
                <p>Kami telah mengirimkan email yang berisi link grup untuk <br>perjalanan ini, mohon untuk baca
                    instruksinya dengan lengkap</p>
                    <a href="https://api.whatsapp.com/send?phone=6282125609413&text=Halo%20Admin%20Cabskuy%20Travel,%20Saya%20mau%20konfirmasi%20pembayaran%20trip." class="btn btn-home-page mt-3 px-5" target="_blank" rel="noopener noreferrer">
                        Konfirmasi Pembayaran
                    </a>
                <div class="join-container d-grid gap-2 rounded-circle">
                    <a href="{{ url('/') }}" 
                        class="btn btn-block btn-join-now py-2 text-center">Kembali Ke Home</a>
                </div>
            </div>
        </div>
    </main>
    <!-- Akhir Main Section -->
@endsection