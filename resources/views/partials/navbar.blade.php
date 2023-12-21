<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/icon/putih.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" id="ada"></span>
            <span class="fab fa-mixer" id="close"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'beranda' ? 'active' : '' }} hvr-underline-from-center"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'layanan' ? 'active' : '' }} hvr-underline-from-center"
                        href="/layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'galeri' ? 'active' : '' }} hvr-underline-from-center"
                        href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'blog' ? 'active' : '' }} hvr-underline-from-center"
                        href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'tentang' ? 'active' : '' }} hvr-underline-from-center"
                        href="/tentang-kami">Tentang</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }} hvr-underline-from-center"
                        href="/categories">Categories</a>
                </li> --}}

            </ul>
            {{-- <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="/dashboard"><i class="fas fa-tachometer-alt"></i>
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item "><i class="fas fa-sign-out-alt"></i>
                                    Logout</button>
                            </form>

                        </ul>
                    </li>
                @else
                    <li class="navbar-item">
                        <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }} fas fa-sign-in-alt ">
                            Login</a>
                    </li>
                </ul>
            @endauth --}}
        </div>
    </div>
</nav>
