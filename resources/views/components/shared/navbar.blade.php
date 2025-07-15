<nav class="navbar navbar-expand-lg bg-body-tertiary shadow mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">BasketBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('chi.siamo')}}">Chi siamo</a>
        </li>


        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('articles.create')}}">Pubblica il tuo articolo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-regular fa-circle-user me-1"></i>{{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profilo</a></li>
            <li><a class="dropdown-item" href="#">I miei annunci</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="nav-item d-flex justify-content-start align-items-center px-3">
              <form class="nav-link p-0 m-0" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn m-0 p-0 text-danger">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @endauth

        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-user-lock me-1"></i>Accedi</a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>