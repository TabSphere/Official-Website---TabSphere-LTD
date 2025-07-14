<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logo_white.png') }}" alt="">
            <h1 class="sitename">{{ config('app.name', 'TabSphere') }}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
</header>
