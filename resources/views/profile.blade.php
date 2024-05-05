@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-dark-subtle rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <h4 class="fw-bold">My Profile</h4>
                    <div class="border-radius-sm">
                        <img class="img-fluid rounded w-50" src="{{ Vite::asset('resources/images/tania.jpg') }}"alt="image">
                    </div>
                </div>
                <hr style="color: #000">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label font-weight-bold">Nama Depan</label>
                        <input type="text" class="form-control " disabled value="Natania">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lastName" class="form-label font-weight-bold">Nama Belakang</label>
                        <input type="text" class="form-control " disabled value="Fadlilah">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email" class="form-label font-weight-bold">Email</label>
                        <input type="text" class="form-control " disabled value="nathania@gmail.com">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label font-weight-bold">Umur</label>
                        <input type="text" class="form-control " disabled value="22">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ url('/') }}" class="btn btn-outline-primary btn-lg mt-3"><i
                                class="bi-house-door-fill"></i>
                            Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
