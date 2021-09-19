<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top px-3">
        <a href="{{ url('/') }}" class="navbar-brand">
            <div class="container">
                <img src="{{ url('frontend/images/CABSKUY.png') }}" alt="Logo Nomads">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Paket Travel</a>
                </li>
                <li class="nav-item dropdown">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu dropdown-menu-light"
                                    aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Testimonial</a>
                </li>
            </ul>

            @guest
                <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}'">Masuk</button>
            </form>
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login') }}'">Masuk</button>
            </form>
            @endguest

            @auth
                <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
            </form>
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">Keluar</button>
            </form>
            @endauth

        </div>
     </div>
 </nav>
</div>
<!-- Akhir Navbar -->