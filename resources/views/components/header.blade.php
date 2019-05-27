<nav class="navbar navbar-expand-md navbar-dark sticky-top headerBackground">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('index') }}">ProLearner</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollLink" href="{{ route('index') }}#contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @if(Session::exists('locale') && Session::get('locale', 'unknown') != 'en')
                    <li class="nav-item">
                        <a rel="nofollow" href="{{ route('locale.update', 'en') }}" data-toggle="tooltip" data-placement="bottom" title="English" class="nav-link"><span class="languageIcon icon-gb"></span></a>
                    </li>
                @elseif(!Session::exists('locale') || Session::get('locale', 'unknown') != 'nl')
                    <li class="nav-item">
                        <a rel="nofollow" href="{{ route('locale.update', 'nl') }}" data-toggle="tooltip" data-placement="bottom" title="Nederlands" class="nav-link"><span class="languageIcon icon-nl"></span></a>
                    </li>

                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">Thema</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i> Sign in</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Profile</a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
