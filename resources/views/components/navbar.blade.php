<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">
      <i class="fa-solid fa-newspaper colorange">
        <span class="m-lg-5" >
          The Aulab Post
        </span>
      </i>
    </a>
    <button class="navbar-toggler " type="button " data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="fa-solid fa-bars" style="color: #ffaa00;"></i></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      
      
      
      <ul class="navbar-nav me-auto mb-0 mb-lg-0 colorange ">
        
        @guest
        <li class="nav-item effect">
          <a class="nav-link active colorange" aria-current="page" href="{{route('homepage')}}"><i class="fa-solid fa-house px-2"></i>Home</a>
        </li>
        <li class="nav-item effect">
          <a class="nav-link colorange" href="{{route('careers')}}"><i class="fa-solid fa-briefcase px-2"></i>Lavora con noi</a>
        </li>
        @else 
        <li class="nav-item effect">
          <a class="nav-link active colorange" aria-current="page" href="{{route('homepage')}}"><i class="fa-solid fa-house px-2"></i>Home</a>
        </li>
        <li class="nav-item effect">
          <a class="nav-link colorange" href="{{route('careers')}}"><i class="fa-solid fa-briefcase px-2"></i>Lavora con noi</a>
        </li>
        <li class="nav-item effect">
          <a class="nav-link colorange" href="{{route('article.create')}}"><i class="fa-solid fa-book-medical px-2"></i>Crea articolo</a>
        </li>
        <li class="nav-item effect">
          <a class="nav-link colorange" href="{{route('article.index')}}"><i class="fa-solid fa-book-open-reader px-2"></i>Tutti gli articoli</a>
        </li>
        
        @if (Auth::user()->is_admin)
        <li class="nav-item effect">
          <a class="nav-link colorange" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-user-secret px-2"></i></i>Dashboard Admin</a>
        </li>
        @endif
        @if (Auth::user()->is_revisor)
        <li class="nav-item effect">
          <a class="nav-link colorange" href="{{route('revisor.dashboard')}}"><i class="fa-solid fa-user-astronaut px-2"></i>Dashboard Revisore</a>
        </li>
        @endif
        @if (Auth::user()->is_writer)
        <li class="nav-item effect">
          <a class="nav-link colorange" href="{{route('writer.dashboard')}}"><i class="fa-solid fa-feather px-2"></i></i>Dashboard Scrittore</a>
        </li>
        @endif
        @endguest
        
        
        
        <li class="nav-item dropdown effect">
          <a class="nav-link dropdown-toggle colorange" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user px-2"></i> Ciao {{ Auth::user()->name ?? 'utente' }}
          </a>
          <ul class="dropdown-menu ">
            <li class="effect"></li>
            @guest
            
            <li class="effect"><a class="dropdown-item colorange" href="{{route('login')}}">Accedi</a></li>
            <li class="effect"><a class="dropdown-item colorange" href="{{route('register')}}">Registrati</a></li>
            @else
            <form  action="{{ route('logout') }}" method="POST">
              @csrf
              <div class=" d-flex justify-content-center " >
                <button type="submit" class=" btn btn-danger colorange">Logout</button>
              </div>
              
            </form>
            
            @endguest
            
          </ul>
        </li>
        
      </ul>
      <div id="toggle-btn" class="btn  "><i class="fa-solid fa-yin-yang"></i></div>
      <form class="d-flex colorange" method="GET" action="{{route('article.search')}}">
        <input class="form-control me-2 bordoorang " type="search" placeholder="cosa stai cercando?" aria-label="Search" name="query">
        <button class="btn btn-outline-orange " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
      
      
    </div>
  </div>
</nav>