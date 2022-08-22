<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Catatan Perjalanan</a>
        <button class="navbar-toggler position-absolute mt-auto collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('catatan') ? 'active' : '' }}" href="/catatan">Catatan Perjalanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('isi') ? 'active' : '' }}" href="/isi">Isi Data</a>
                </li>
            </ul>
            
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome, {{ auth()->user()->nama_lengkap() }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
            </ul>
        </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>  Login</a>
                </li>
                @endauth
            </ul>

            
        </div>
    </div>
</nav>