<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}">AulabPost</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('article.create') }}">Inserisci un articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('article.index') }}">Tutti gli articoli</a>
        </li>
        @auth
        @if (Auth::user()->is_admin)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a>
        </li>
        @endif
        @if (Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('revisor.dashboard') }}">Dashboard del Revisore</a>
        </li>
        @endif
        @if (Auth::user()->is_writer)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('writer.dashboard') }}">Dashboard del Redattore</a>
        </li>
        @endif
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item">
              <form action="{{ route('logout') }}" id="logout-form" method="POST">
                @csrf
                <button type="submit" class="btn nav-link">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @endauth
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto Ospite
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
          </ul>
        </li>
        @endguest
      </ul>
    </li>
  </ul>
  <form class="d-flex" method="GET" action="{{ route('article.search') }}">
    <input class="form-control me-2" type="search" placeholder="Cosa stai cercando?" aria-label="Search" name="query">
    <button class="btn btn-outline-info" type="submit">Cerca</button>
  </form>
</div>
</div>
</nav>