<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <a id="logo" class="navbar-brand" href="/"><img src="/images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          {{-- <li class="nav-item"><a class="nav-link" href="/admin/projects">Admin</a></li> --}}
          <li class="nav-item"><a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/">About</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="/customers">Team</a></li>
      </ul>
    </div>
</nav>