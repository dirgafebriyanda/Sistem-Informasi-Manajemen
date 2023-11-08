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
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }} garis" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }} garis" href="/layanan-kami">Layanan
                        Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }} garis" href="/tentang-kami">Tentang
                        Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }} garis" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }} garis" href="/testimoni">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }} garis" href="/posts">Blog</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }} garis"
                        href="/categories">Categories</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }} garis" href="/kontak-kami">Kontak
                        Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }} garis"
                        href="/kritik-&-saran">Kritik & Saran</a>
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
