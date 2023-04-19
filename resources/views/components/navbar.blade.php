<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="/dashboard" class="navbar-brand">
        <img src="/images/meyclogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LCRSYS</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          {{-- <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li> --}}
          <li class="nav-item">
            <a href="{{route('dashboard.index')}}" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="{{route('birth.index')}}" class="nav-link">Birth</a>
          </li>
          <li class="nav-item">
            <a href="{{route('death.index')}}" class="nav-link">Death</a>
          </li>
          <li class="nav-item">
            <a href="{{route('marriage.index')}}" class="nav-link">Marriage</a>
          </li>
        </ul>

      </div>
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          {{-- <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a> --}}
          <a href="{{route('logout')}}" class="btn btn-outline-danger rounded-circle" title="Logout"><span class="fas fa-power-off"></span></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->