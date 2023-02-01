

<header>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="home">
        <img
          src="https://static.wikia.nocookie.net/lego-dimensions-customs/images/0/0e/Cthulhu_Mythos_Logo.png"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      @if(auth()->check())
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link">{{auth()->user()->name}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout">logout</a>
        </li>
      </ul>
      @else
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="register">Create account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Log In</a>
        </li>
      </ul>
      @endif
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</header>
