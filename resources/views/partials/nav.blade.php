<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand mx-4" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
          @guest
            <a class="nav-item nav-link" href="{{ route('homePage') }}">Home</a>
            <a class="nav-item nav-link" href="">login</a>
            <a class="nav-item nav-link" href="">SignUp</a>
          @endguest

          @auth
          <a class="nav-item nav-link" href="{{ route('profiles.index') }}">My Profile</a>
          <a class="nav-item nav-link" href="">My tasks</a>
              <!-- Dropdown Menu -->
            <div class="dropdown">
              <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  {{auth()->user()->name}}
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ route('login.logout') }}">Logout</a>
              </ul>
            </div>
          @endauth
      </div>
  </div>
</nav>
