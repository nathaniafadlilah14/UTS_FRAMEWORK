<body>
    @php
        $currentRouteName = Route::currentRouteName();
    @endphp
    <nav class="navbar navbar-expand-md navbar-light bg-primary-subtle">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1 font-weight-bold text-">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image"
                    style="width: 30px;">
                Tania Store
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row flex-wrap ms-auto">
                    <li class="nav-item col-6 col-md-auto"> <!-- Mengubah lebar kolom saat tampilan handphone -->
                        <a href="{{ route('barang.index') }}"
                            class="btn btn-outline-dark  @if ($currentRouteName == 'barang.index') font-weight-bold active @endif">
                            <i class="bi-list me-1"></i>
                            Daftar Barang
                        </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto"> <!-- Mengubah lebar kolom saat tampilan handphone -->
                        <a href="{{ route('profile') }}"
                            class="btn btn-outline-dark  @if ($currentRouteName == 'profile') font-weight-bold active @endif">
                            <i class="bi-person-circle me-1"></i>
                            Nathania Fadlilah
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>
