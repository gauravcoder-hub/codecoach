<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <span>Code Coach</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/tutorials') }}">Tutorials</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/why-us') }}">Why Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/team') }}">Our Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-user"></i> Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
