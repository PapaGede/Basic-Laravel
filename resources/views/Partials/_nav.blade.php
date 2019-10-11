<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">PapaGede</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('/') ? "active":""}}">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item {{ Request::is('about') ? "active":""}}">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item {{ Request::is('contact') ? "active":""}}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item {{ Request::is('posts/create') ? "active":""}}">
        <a class="nav-link" href="/posts/create">Create</a>
      </li>
      <li class="nav-item {{ Request::is('posts') ? "active":""}}">
          <a class="nav-link" href="/posts">Posts</a>
        </li>
      </li>
      </ul>
      <ul style="position:absolute;right:90px" class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
      <div></div>
     </div>
    </ul>
    
</nav>