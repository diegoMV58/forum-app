
<link href="{{ asset('css/header.css') }}" rel="stylesheet">
<header>
  <h1>Old Cars Forum</h1>
  <nav>
    <ul>
    @if( !auth()->check() )
      <li><a href="register">Register</a></li>
      <li><a href="login">Log in</a></li>
    @else
    <li><a>Welcome, {{ auth()->user()->name }}</a></li>
      <li><a href="logout">Log out</a></li>
    @endif
    </ul>
  </nav>
</header>
