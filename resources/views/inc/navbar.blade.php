<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="/">Carshow</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/faq">FAQ</a></li>
      </ul>
      
       <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <p><a href="{{ route('login') }}" class="btn btn-outline-light" role="button">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-success" role="button">Register</a></li>
            @else
                <li class="nav-item"><a class="btn btn-outline-success" href="/gallery/create">Create Post</a></li>
                <li class="nav-item active"><a class="nav-link" href="/home">
                        {{ Auth::user()->username }}
                </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
            @endif
        </ul>     
    </div>
</nav>


