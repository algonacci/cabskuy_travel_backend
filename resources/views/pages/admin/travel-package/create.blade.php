@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
        </div>  


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <input type="text" class="form-control" name="location" placeholder="Location" value="{{ old('location') }}">
                    </div>
                    <div class="form-group">
                        <label for="about">Tentang Wisata</label>
                        <textarea name="about" cols="30" rows="10" class="d-block w-100 form-control">{{old('about') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured_event">Acara Menarik</label>
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ old('featured_event') }}">
                    </div>
                    <div class="form-group">
                        <label for="language">Bahasa</label>
                        <input type="text" class="form-control" name="language" placeholder="Language" value="{{ old('language') }}">
                    </div>
                    <div class="form-group">
                        <label for="foods">Makanan</label>
                        <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ old('foods') }}">
                    </div>
                    <div class="form-group">
                        <label for="departure_date">Tanggal Keberangkatan</label>
                        <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{ old('departure_date') }}">
                    </div>
                    <div class="form-group">
                        <label for="duration">Durasi</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ old('duration') }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe Trip</label>
                        <input type="text" class="form-control" name="type" placeholder="Type" value="{{ old('type') }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="text" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection