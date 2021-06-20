<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid px-5">
      <a class="h1" href="index"><b>Film</b>Pedia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if (auth()->user()->akses==="admin")
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Data
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('indexadminfilm') }}">Data Film</a></li>
            </ul>
          </li>
        @endif
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item py-2">
                <p>{{ auth()->user()->name }}</p>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                  <p>
                    Log Out
                  </p>
                </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
