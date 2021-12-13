<nav class="navbar navbar-expand-lg  {{ Request::is('/') ? 'navbar-dark fixed-top' : 'navbar-light bg-light sticky-top' }}">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Ini Judul</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="/posts">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Country
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/country">Indonesia <img src="img/ina.png" alt="" width="20" height = "15" class="ig-thubnail rounded"></a></li>
            <li><a class="dropdown-item" href="/country">Jepang <img src="img/jpn.png" alt="" width="20" height = "15" class="ig-thubnail rounded"></a></li>
            <li><a class="dropdown-item" href="/country">Italia <img src="img/ita.png" alt="" width="20" height = "15" class="ig-thubnail rounded"></a></li>
            <li><a class="dropdown-item" href="/country">India <img src="img/ind.png" alt="" width="20" height = "15" class="ig-thubnail rounded"></a></li>
            <li><a class="dropdown-item" href="/country">Turki <img src="img/trk.png" alt="" width="20" height = "15" class="ig-thubnail rounded"></a></li>
            <li><a class="dropdown-item" href="/country">Korea <img src="img/kor.png" alt="" width="20" height = "15" class="ig-thubnail rounded"></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="/dashboard"><i class="bi bi-house-fill"></i>
                Dashboard</a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
      </ul>

    </div>
  </div>
</nav>