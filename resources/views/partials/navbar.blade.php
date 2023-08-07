<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-1 shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">WPU Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
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
            @endauth
        </div>
    </div>
</nav>
