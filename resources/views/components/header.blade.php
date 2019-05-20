<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
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
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Languages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thema</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"></i> Sign in</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
