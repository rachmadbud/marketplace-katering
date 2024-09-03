  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ url('/') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ url('/') }}" class="nav-link"></a>
          </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fad fa-user"></i>
                  {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">Menu</span>
                  <div class="dropdown-divider"></div>
                  {{-- <a href="" class="dropdown-item">
            <i class="fad fa-key"></i> Ubah Password
          </a> --}}
                  <a href="{{ route('logout') }}" class="dropdown-item"
                      onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      <i class="fad fa-sign-out-alt"></i> Keluar
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>

                  <a href="{{ route('merchant.profile') }}" class="dropdown-item">
                      <i class="fad fa-users"></i> Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer"></a>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->
