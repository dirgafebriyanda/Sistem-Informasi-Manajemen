<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-1 shadow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src={{ 'img/icon/putih.png' }} alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" id="ada"></span>
            <span class="fab fa-mixer" id="close"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'beranda' ? 'active' : '' }} garis" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'layanan' ? 'active' : '' }} garis" href="/layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'galeri' ? 'active' : '' }} garis" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'testimoni' ? 'active' : '' }} garis"
                        href="/testimoni">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'blog' ? 'active' : '' }} garis" href="/blog-dan-berita">Blog &
                        Berita</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }} garis"
                        href="/categories">Categories</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'tentang' ? 'active' : '' }} garis" href="/tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'kritik' ? 'active' : '' }} garis" href="/kritik-dan-saran">Kritik
                        & Saran</a>
                </li>
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
