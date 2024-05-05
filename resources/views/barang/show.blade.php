@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image"
                        style="width: 45px;">
                    <h4>{{ $pageTitle }}</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="kodeBarang" class="form-label">Kode Barang</label>
                        <input class="form-control" value="{{ $barang->kode_barang }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="namaBarang" class="form-label">Nama Barang</label>
                        <input class="form-control" value="{{ $barang->nama_barang }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="harga" class="form-label">Harga Barang</label>
                        <input type="number" class="form-control" value="{{ $barang->price }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="deskripsiBarang" class="form-label">Satuan Barang</label>
                        <input class="form-control" value="{{ $barang->units->name }}" disabled>
                    </div>
                    <div class="">
                        <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <textarea class="form-control @error('deskripsiBarang') is-invalid @enderror" type="text" name="deskripsiBarang"
                            id="deskripsiBarang" placeholder="Dekripsi barang" disabled>{{ $barang->description }}</textarea>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('barang.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
