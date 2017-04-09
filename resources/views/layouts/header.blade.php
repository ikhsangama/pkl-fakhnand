<head>
  <style>
    body {
        font-family: 'Lato';
    }

    .fa-btn {
        margin-right: 6px;
    }
  </style>
  <nav class="navtop navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">USD
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">USD</a></li>
          <li><a href="#">IDR</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">English
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Bahasa</a></li>
          <li><a href="#">English</a></li>
        </ul>
      </li>
    </ul>
@if (Auth::guest())
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> (2) /</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-lock"></span> Sign In /</a></li>
      <li><a href="/register"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
    </ul>
@elseif(Auth::user())
 LOGIN
 <a href="{{ url('/logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    Logout
</a>
<form id="logout-form" action="{{ url('/logout') }}" method="POST">
{{ csrf_field() }}
</form>
@endif
    </div>
  </nav>

  <nav class="navmenu navbar navbar-inverse">
    <div class="container contmenu">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">HOME</a></li>
      <li><a href="#">DESTINATIONS</a></li>
      <li><a href="#">TRAVEL STYLES</a></li>
      <li><a href="#">SPECIALS</a></li>
      <li><a href="#">BLOG</a></li>
      <li><a href="#">CONTACT</a></li>
    </ul>
    </div>
  </nav>
</head>
